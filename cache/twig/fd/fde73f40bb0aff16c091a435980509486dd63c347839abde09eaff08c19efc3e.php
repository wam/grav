<?php

/* partials/scribbler_script2.html.twig */
class __TwigTemplate_163cb2e79aea2073e379ee0830eecbacb68d3729b055b777f6d73541862ad346 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
\"use strict\";

var cDiv = document.getElementById('cDiv');
var cWidth = cDiv.clientWidth;
var cHeight = cDiv.clientHeight;
var myBody = document.body;
var bodyColor = window.getComputedStyle(myBody, null).getPropertyValue(\"background-color\");
var limitCount = 0;
var limitMax = 90;

if (cHeight <= 46) {
  var cHeight = cHeight * 0.8;
}

var sq = cHeight;

var doub = sq * 2;
var rAlign = cWidth - doub;
var mid = cWidth/2;
var midOr = mid - (sq/2);

var wid1a = sq;
var wid1b = sq + sq;
var hi1a = 0;
var hi1b = sq;
var wid2a = rAlign;
var wid2b = rAlign + sq;
var hi2a = 0;
var hi2b = sq;
var wid3a = midOr;
var wid3b = midOr + sq;
var hi3a = 0;
var hi3b = sq;



function Particle() {
  this.x = random(wid1a, wid1b);
  this.y = random(hi1a, hi1b);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < wid1a) this.x = wid1a;
  if (this.x > wid1b) this.x = wid1b;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};



function Particle2() {
  this.x = random(wid2a, wid2b);
  this.y = random(hi2a, hi2b);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle2.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < wid2a) this.x = wid2a;
  if (this.x > wid2b) this.x = wid2b;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle2.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};

function Particle3() {
  this.x = random(wid3a, wid3b);
  this.y = random(hi3a, hi3b);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle3.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < wid3a) this.x = wid3a;
  if (this.x > wid3b) this.x = wid3b;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle3.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};

var particleStepMax;
var p;
var p2;
var p3;
var isDrawing;
var myCanvas;

function setup() {
  frameRate(10);
  particleStepMax = 40;
  p = new Particle();
  p2 = new Particle2();
  p3 = new Particle3();
  myCanvas = createCanvas(cWidth, cHeight);
  myCanvas.parent('cDiv');
  stroke(0);
  background(bodyColor);
  isDrawing = true;
}

function draw() {
  noFill();
  rect(cHeight, 0, cHeight, cHeight);
  rect(rAlign, 0, cHeight, cHeight);
  rect(midOr, 0, cHeight, cHeight);
  p.move();
  p.draw();
  p2.move();
  p2.draw();
  p3.move();
  p3.draw();
  limitCount += 1;

  if (limitCount >= limitMax) {
    noLoop();
    limitCount = 0;
    isDrawing = false;
  }
}

function windowResized() {
  cWidth = cDiv.clientWidth;
  cHeight = cDiv.clientHeight;
  limitCount = 0;
  background(bodyColor);
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
";
    }

    public function getTemplateName()
    {
        return "partials/scribbler_script2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
\"use strict\";

var cDiv = document.getElementById('cDiv');
var cWidth = cDiv.clientWidth;
var cHeight = cDiv.clientHeight;
var myBody = document.body;
var bodyColor = window.getComputedStyle(myBody, null).getPropertyValue(\"background-color\");
var limitCount = 0;
var limitMax = 90;

if (cHeight <= 46) {
  var cHeight = cHeight * 0.8;
}

var sq = cHeight;

var doub = sq * 2;
var rAlign = cWidth - doub;
var mid = cWidth/2;
var midOr = mid - (sq/2);

var wid1a = sq;
var wid1b = sq + sq;
var hi1a = 0;
var hi1b = sq;
var wid2a = rAlign;
var wid2b = rAlign + sq;
var hi2a = 0;
var hi2b = sq;
var wid3a = midOr;
var wid3b = midOr + sq;
var hi3a = 0;
var hi3b = sq;



function Particle() {
  this.x = random(wid1a, wid1b);
  this.y = random(hi1a, hi1b);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < wid1a) this.x = wid1a;
  if (this.x > wid1b) this.x = wid1b;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};



function Particle2() {
  this.x = random(wid2a, wid2b);
  this.y = random(hi2a, hi2b);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle2.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < wid2a) this.x = wid2a;
  if (this.x > wid2b) this.x = wid2b;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle2.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};

function Particle3() {
  this.x = random(wid3a, wid3b);
  this.y = random(hi3a, hi3b);
  this.oldX = this.x;
  this.oldY = this.y;
}

Particle3.prototype.move = function () {
  this.oldX = this.x;
  this.oldY = this.y;
  this.x += random(-particleStepMax, particleStepMax);
  this.y += random(-particleStepMax, particleStepMax);
  if (this.x < wid3a) this.x = wid3a;
  if (this.x > wid3b) this.x = wid3b;
  if (this.y < 1) this.y = 1;
  if (this.y > cHeight - 1) this.y = cHeight - 1;
};

Particle3.prototype.draw = function () {
  strokeJoin(BEVEL);
  strokeWeight(2);
  line(this.oldX, this.oldY, this.x, this.y);
};

var particleStepMax;
var p;
var p2;
var p3;
var isDrawing;
var myCanvas;

function setup() {
  frameRate(10);
  particleStepMax = 40;
  p = new Particle();
  p2 = new Particle2();
  p3 = new Particle3();
  myCanvas = createCanvas(cWidth, cHeight);
  myCanvas.parent('cDiv');
  stroke(0);
  background(bodyColor);
  isDrawing = true;
}

function draw() {
  noFill();
  rect(cHeight, 0, cHeight, cHeight);
  rect(rAlign, 0, cHeight, cHeight);
  rect(midOr, 0, cHeight, cHeight);
  p.move();
  p.draw();
  p2.move();
  p2.draw();
  p3.move();
  p3.draw();
  limitCount += 1;

  if (limitCount >= limitMax) {
    noLoop();
    limitCount = 0;
    isDrawing = false;
  }
}

function windowResized() {
  cWidth = cDiv.clientWidth;
  cHeight = cDiv.clientHeight;
  limitCount = 0;
  background(bodyColor);
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
", "partials/scribbler_script2.html.twig", "/Users/brendanpolmer/grav/user/themes/personal/templates/partials/scribbler_script2.html.twig");
    }
}
