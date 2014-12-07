Arc[] arcs = new Arc[5];
boolean growing = false;
boolean goingDown = false;
boolean growingSolid = false;

float centerRadius;
float solidRadius;
float cAdjust =0;
float colorValue;

float opacity= 100;
float solidOpacity= 100;

float speedAdjust = 1;

void setup() {
  colorMode(HSB, 100);

  smooth();
  size(120, 120);
  int randColor = int(random(35, 99));
  //hue, brightness, alpha, radius, noise ranges, speed, start, end, 
  for (int i = 0; i<arcs.length;i++) {
    arcs[i]=new Arc(
    randColor, //hue
    65-(3*i), //brightness
    40+(8*i), //alpha
    115-(i*15), //radius
    7, //noise range
    (i+1)*0.008, //speed
    0, //start
    PI*2); //end
  }
}

void draw() {
  background(#ffffff);
  for (int i = 0; i<arcs.length;i++) {
    arcs[i].display();
  }


  if (growing) {
    centerRadius+=2;
    opacity-=2;
    noFill();
    stroke(100, opacity);
    strokeWeight(1);
    ellipse(width/2, height/2, centerRadius, centerRadius);
  } 
  else {
    noStroke();
    opacity=100;
    noFill();
    centerRadius = 0;
    ellipse(width/2, height/2, centerRadius, centerRadius);
  }

  if (centerRadius>120) {
    growing = false;
  }

  //growingSolid statement
  if (growingSolid) {
    solidRadius+=2;
    solidOpacity-=3;
    noStroke();
    fill(colorValue, 50,50, solidOpacity);
    ellipse(width/2, height/2, solidRadius, solidRadius);
  } 
  else {
    noStroke();
    solidOpacity=100;
    noFill();
    solidRadius = 0;
    ellipse(width/2, height/2, solidRadius, solidRadius);
  }

  if (solidRadius>100) {
    growingSolid = false;
  }
}

class Arc {
  float c;
  float radius;
  float theta;
  float start;
  float end;
  float alpha;
  float bright;


  //class global variables
  boolean top = false;
  float speed= 0;
  float range = 0.01;
  float noiseValue=0;
  float direction = random(1);




  Arc(color tempC, float tempBright, float tempAlpha, float tempRadius, float tempTheta, float tempRange, float tempStart, float tempEnd) {
    c=  tempC;
    bright = tempBright;
    range = tempRange;
    radius=  tempRadius;
    theta=  tempTheta;
    start=  tempStart;
    end= tempEnd;
    alpha=  tempAlpha;
    if (direction <0.5) {
      top=false;
    }
    else {
      top=true;
    }
  }

  void display() {

    //direction of arc
    noiseValue= noise(speed)*range*speedAdjust;
    speed+=0.01;




    pushMatrix();
    translate(width/2, height/2);
    if (top ==false) {
      theta += noiseValue;
      c += noiseValue;
      //bright += noiseValue;
    } 
    else {
      theta -=noiseValue;
      c -= noiseValue;
      //bright -= noiseValue;
      //bright -= noiseValue;
    }
    if (theta>(end+.1)) {
      top = true;
      growing = true;
    }
    if (theta<start-.1) {
      top = false;
      //fill(c,100,bright);
      growing = true;
    }

    rotate(theta);
    colorValue = c+cAdjust;
    fill(colorValue, 100, bright, alpha);
    noStroke();
    arc(0, 0, radius, radius, theta, end);
    popMatrix();
  }

  //add noise and rotatioin
}
void mousePressed() {

  growingSolid=true;
  
  if(speedAdjust <7){
    speedAdjust +=0.1;
  }else{
    speedAdjust +=0;
  }
  
  if( colorValue>90){
    goingDown=true;
  }
  if(colorValue<20){
  goingDown=false;
  }
  
  if(goingDown){
    cAdjust -=5;
  }else{
    cAdjust +=5;
  }
}

