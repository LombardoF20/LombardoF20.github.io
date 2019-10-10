let ctx = canvas.getContext("2d");
let cw = (canvas.width = window.innerWidth);
let ch = (canvas.height = window.innerHeight);

let size = 30; //flow field cell size
let rows = ~~(ch / size) + 2;
let cols = ~~(cw / size) + 2;

let rid = null; // request animation id

let amplitude = 90;
let frequency = 0.007;

let sinery = []; // sine wavwe array
getSinRy(cols); // get values for the sine wavwe array

class Particle {
  constructor() {
    this.pos = { x: Math.random() * cw, y: Math.random() * ch / 2 + ch / 4 };
    this.vel = { x: 0, y: 0 };
    this.base = { x: (1 + Math.random()) * 3, y: (1 + Math.random()) * 3 };
    this.r = randomIntFromInterval(5, 25);
    // using the colors from Only CSS: Infinite Wave by Yusuke Nakaya
    this.color = `rgba(100, ${~~(Math.random() * 155) + 100}, ${~~(
      Math.random() * 155
    ) + 50}, 1)`;
  }

  update() {
    this.pos.x += this.vel.x;
    this.pos.y += this.vel.y;
  }

  show() {
    ctx.beginPath();
    ctx.fillStyle = this.color;
    ctx.arc(this.pos.x, this.pos.y, this.r, 0, 2 * Math.PI);
    ctx.fill();
    ctx.globalCompositeOperation = "lighter";
  }

  edges() {
    if (this.pos.x > cw + this.r) {
      this.pos.x = -this.r;
      this.pos.y = Math.random() * ch / 2 + ch / 4;
    }
    if (this.pos.x < -this.r) {
      this.pos.x = cw + this.r;
      this.pos.y = Math.random() * ch / 2 + ch / 4;
    }
    if (this.pos.y > ch + this.r) {
      this.pos.y = -this.r;
      this.pos.x = Math.random() * cw;
    }
    if (this.pos.y < -this.r) {
      this.pos.y = ch + this.r;
      this.pos.x = Math.random() * cw;
    }
  }

  follow() {
    let x = ~~(this.pos.x / size);
    let y = ~~(this.pos.y / size);
    let index = x + y * cols;

    let angle = flowField[index];

    this.vel.x = this.base.x * Math.cos(angle);
    this.vel.y = this.base.y * Math.sin(angle);
  }
}

let particles = [];

let flowField = new Array(rows * cols);
getFlowField(rows, cols);

for (let i = 0; i < 300; i++) {
  particles.push(new Particle());
}

function frame() {
  rid = requestAnimationFrame(frame);
  ctx.clearRect(0, 0, cw, ch);

  particles.map(p => {
    p.follow();
    p.update();
    p.show();
    p.edges();
  });

  txt();
}

function getSinRy(cols) {
  for (var x = 0; x <= cols; x++) {
    let o = {};
    o.x = x * size;
    o.y = Math.sin(x * size * frequency) * amplitude + amplitude;
    sinery.push(o);
  }

  sinery[0].angle = 0;
  for (let i = 1; i < sinery.length; i++) {
    let deltay = sinery[i].y - sinery[i - 1].y;
    sinery[i].angle = Math.atan2(deltay, size);
  }
}

function getFlowField(rows, cols) {
  for (y = 0; y <= rows; y++) {
    for (x = 0; x < cols; x++) {
      let angle = sinery[x + 1].angle;
      let _x = x * size + size * Math.cos(angle);
      let _y = y * size + size * Math.sin(angle);
      let index = x + y * cols;

      flowField[index] = angle;
    }
  }
}

function randomIntFromInterval(mn, mx) {
  return Math.floor(Math.random() * (mx - mn + 1) + mn);
}

function Init() {
  cw = canvas.width = window.innerWidth;
  console.log(cw);
  ch = canvas.height = window.innerHeight;

  rows = ~~(ch / size) + 2;
  cols = ~~(cw / size) + 2;

  sinery.length = 0;
  getSinRy(cols);

  flowField = new Array(rows * cols);
  getFlowField(rows, cols);

  if (rid) {
    window.cancelAnimationFrame(rid);
    rid = null;
  }
  frame();
}

window.setTimeout(function() {
  Init();

  window.addEventListener("resize", Init, false);
}, 15);

function txt() {
  //function inspired by Tiffany Rayside
  ctx.globalCompositeOperation = "source-over";
  var t = " Lombardo".split("").join(String.fromCharCode(160));
  ctx.font = "56px Poiret One";
  ctx.fillStyle = "LimeGreen";
  ctx.fillText(t, (cw - ctx.measureText(t).width) * 0.5, 0.89 * ch / 2 + 28);
}
