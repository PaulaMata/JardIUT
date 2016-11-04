const int PUMP_PIN = 48;

void setup() {
 Serial.begin(9600);
 pinMode(PUMP_PIN, OUTPUT);
}

void loop() {
 Serial.println(analogRead(A0));
 digitalWrite(PUMP_PIN, HIGH);
 delay(1000);
 digitalWrite(PUMP_PIN, LOW);
 delay(1000);
 }
