const int trigPin = 9;
const int echoPin = 10;
const int buzzer = 11;
int redLight= 8;
int greenLight=7;

 
long duration;
int distance;
int safetyDistance;
 
 
void setup() {
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
pinMode(buzzer, OUTPUT);
pinMode(redLight, OUTPUT);
pinMode(greenLight, OUTPUT);
Serial.begin(9600);
}
 
 
void loop() {
digitalWrite(trigPin, LOW);
delayMicroseconds(2);

digitalWrite(redLight, HIGH);
digitalWrite(greenLight, HIGH);
 
digitalWrite(trigPin, HIGH);
delayMicroseconds(10);
digitalWrite(trigPin, LOW);
 
duration = pulseIn(echoPin, HIGH);
 
distance= duration*0.034/2;
 
safetyDistance = distance;
if (safetyDistance <= 8){
tone(buzzer, 2000);
digitalWrite(redLight, HIGH);
digitalWrite(greenLight, LOW);
}
else{
noTone(buzzer);
digitalWrite(redLight, LOW);
digitalWrite(greenLight, HIGH);
}
 
Serial.print("Distance: ");
Serial.println(distance);
}
