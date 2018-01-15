#include <pt.h>
#include <SoftwareSerial.h>
#include <stdio.h>
#include <stdlib.h>

SoftwareSerial BT(4,2); // RX, TX
struct pt cronometro;
struct pt marcador;

char led[10];
String vectorCaracteres;
int golesLocal=0;
  int golesVisita=0;
  int minutos=0;
  int segundos=0;
void setup() {
  // put your setup code here, to run once:
  
   BT.begin(9600);
  PT_INIT(&cronometro);
  PT_INIT(&marcador);
}

void loop() {
  // put your main code here, to run repeatedly:
  while (BT.available()) {
  char CharEntrada = BT.read(); //Leer un byte del puerto serial
   
    vectorCaracteres += CharEntrada;  //Agregar el char anterior al string
  }
 vectorCaracteres.toCharArray(led,10);
 Serial.println(vectorCaracteres);
 if((vectorCaracteres)=='a'&&(vectorCaracteres)=='b'&&(vectorCaracteres)=='c'&&(vectorCaracteres)=='d'){
   marcadorF(&marcador);
  }else{
 
 if(atoi(led)>0){
  cronometroF(&cronometro);
 }
 
  }
  vectorCaracteres="";
}


  void marcadorF(struct pt *pt){
  PT_BEGIN(pt);
  //setup
  pinMode(13,OUTPUT); 
  
  //loop
   static long t=0;
  do{
    
     t=millis();
     PT_WAIT_WHILE(pt, (millis()-t)<1000);
      digitalWrite(13,HIGH);
       
           PT_WAIT_UNTIL(pt, (millis()-t)>1000);
      digitalWrite(13,LOW);
    }while(true);
  PT_END(pt);
  }

void cronometroF(struct pt *pt){
  PT_BEGIN(pt);
  //setup
  Serial.begin(9600);
  BT.begin(9600);
  
  //loop
   static long t=0;
  do{
    t=millis();
    PT_WAIT_WHILE(pt, (millis()-t)<500);
    Serial.println(BT.read());
    PT_WAIT_UNTIL(pt, (millis()-t)>500);
    }while(true);
  PT_END(pt);
  }
  
