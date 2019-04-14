#include <SPI.h>
#include <Ethernet.h>

const int trigPin = 9;
const int echoPin = 10;
const int buzzer = 11;
int redLight= 8;
int greenLight=7;

 
long duration;
int distance;
int safetyDistance;

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
 
IPAddress ip(192,168,137,200);

char server[] = "192.168.137.1";

int interrupt=0;

String mod="testing";

String rcv="";

EthernetClient client;

void setup()
{
  
  Serial.begin(9600);
  
pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
pinMode(buzzer, OUTPUT);
pinMode(redLight, OUTPUT);
pinMode(greenLight, OUTPUT);
  
  Ethernet.begin(mac, ip);
  
  delay(5000);

}

void httpRequest()
{
  if (client.connect(server, 81)) 
  {
    Serial.println("Connection established 1");
    client.print(String("GET ") + "/tryjson.php/" + " HTTP/1.1\r\n" + "Host: " + server + "\r\n" + "Connection: close\r\n\r\n");
    unsigned long timeout = millis();
    while (client.available() == 0) 
    {
      if (millis() - timeout > 25000)
      { 
        return;
      }
    }
    while(client.available())
    {
      String line = client.readStringUntil('\r');
      rcv+=line;
    }
    client.stop();
  }
  else
  {
    Serial.println("Connection failed 1");
  }
  Serial.println("Received string: ");
  Serial.println(rcv);
}

void loop() 
{
  if(interrupt==0)
  {
      httpRequest();
      delay(1000);
      if (client.connect(server, 81)) 
      {
      Serial.println("Connection Established 2");
      client.print("GET /info.php?");
      client.print("request=");
      client.print(mod);
      client.println(" HTTP/1.1"); 
      client.println("Host: 192.168.137.1"); 
      client.println("Connection: close"); 
      client.println(); 
      client.println(); 
      client.stop();
      }
      else
      {
        Serial.println("Connection failed 2");
      }
  }
  interrupt++;
  delay(10000);
  
  pinMode(trigPin, OUTPUT);
pinMode(echoPin, INPUT);
pinMode(buzzer, OUTPUT);
pinMode(redLight, OUTPUT);
pinMode(greenLight, OUTPUT);
Serial.begin(9600);

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
}
 
