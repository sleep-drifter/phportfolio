Arc[] arcs = new Arc[6];

void setup() {
  smooth();
  size(120, 120);
  int randColor = int(random(5,99));
  //hue, brightness, alpha, radius, noise ranges, speed, start, end, 
  for(int i = 0; i<arcs.length;i++){
    arcs[i]=new Arc(
    randColor, //hue
    40-(3*i), //brightness
    40+(8*i), //alpha
    (100/(i+4))*4.5, //radius
    3, //noise range
    (i+1)*0.015, //speed
    0, //start
    PI*2); //end
    
  
  }
}

void draw() {
  background(#ffffff);
  for(int i = 0; i<arcs.length;i++){
    arcs[i].display();
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
   if (direction <0.5){
      top=false;
    }else{
      top=true;}
  }

  void display() {
    colorMode(HSB,100);
    
    //direction of arc
    noiseValue= noise(speed)*range;
    speed+=.01;
    
  
      

    pushMatrix();
    translate(width/2,height/2);
        if (top ==false) {
      theta += noiseValue;
      c += noiseValue;
      bright += noiseValue;
      
    } 
    else {
      theta -=noiseValue;
      c -= noiseValue;
      bright -= noiseValue;
      bright -= noiseValue;
      
    }
    if (theta>(end+.1)) {
      top = true;
      fill(c,100,bright);
      ellipse(0,0,8,8);
      

    }
    if (theta<start-.1) {
      top = false;
      fill(c,100,bright);
      ellipse(0,0,8,8);
      
    }
    
    rotate(theta);
    fill(c,100,bright,alpha);
    noStroke();
    arc(0, 0, radius, radius, theta, end);
    popMatrix();
  }

  //add noise and rotatioin

}


