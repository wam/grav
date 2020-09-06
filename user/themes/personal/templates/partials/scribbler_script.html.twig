
"use strict";

var cDiv = document.getElementById('cDiv');
var cWidth = cDiv.clientWidth;
var cHeight = cDiv.clientHeight;
var myBody = document.body;
var bodyColor = window.getComputedStyle(myBody, null).getPropertyValue("background-color");
var limitCount = 0;

function Particle() {
  this.x = random(cWidth);
  this.y = random(cHeight);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < 1) this.x = 1;
  if (this.x > cWidth - 1) this.x = cWidth - 1;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};

var particleStepMax;
var p;
var p2;
var isDrawing;
var myCanvas;

function setup() {
  frameRate(10);
  particleStepMax = 40;
  p = new Particle();
  p2 = new Particle();
  myCanvas = createCanvas(cWidth, cHeight);
  myCanvas.parent('cDiv');
  stroke(0);
  background(bodyColor);
  isDrawing = true;
}

function draw() {
  p.move();
  p.draw();
  p2.move();
  p2.draw();
  limitCount += 1;

  if (limitCount >= 60) {
    noLoop();
    limitCount = 0;
  }

}


// this still needs fixing!
function windowResized() {
  cWidth = cDiv.clientWidth;
  cHeight = cDiv.clientHeight;
  resizeCanvas(cWidth, cHeight);
}

function pause() {
if (isDrawing === true){
    isDrawing = false;
    noLoop();
  } else {
    isDrawing = true;
    loop()
  }
}
// function mouseClicked() {
//   particleStepMax = random(40);
//   background(bodyColor);
// }
