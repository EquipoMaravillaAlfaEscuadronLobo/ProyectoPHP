#include <SoftwareSerial.h>
#include <pt.h>
SoftwareSerial BT(4,2); // RX, TX
#include <stdio.h>
#include <stdlib.h>
struct pt cronometro;
struct pt marcador;

const int pinSubirLocal= 12;
const int pinSubirVisita= 11;

const int pinResetLocal= 10;
const int pinResetVisita= 9;

const int pinInitMin=8;
const int pinResetMin=7;

const int pinInitSeg=6;
const int pinResetSeg=3;

const int pinDosPuntos=5;


String vectorCaracteres;
int golesLocal=0;
  int golesVisita=0;
  int minutos=0;
  int segundos=0; 
int i=0,j=0,auxSeg;
void setup() 
{
  
    int i;
  for(i=9;i<=13;i++){
  pinMode(i,OUTPUT);
  
  }
    pinMode(3,OUTPUT);
   pinMode(6,OUTPUT);
   pinMode(5,OUTPUT);
   pinMode(7,OUTPUT);
   pinMode(8,OUTPUT);
  //Serial.begin(9600);
  digitalWrite(10,HIGH);
  digitalWrite(10,LOW);

  digitalWrite(9,HIGH);
  digitalWrite(9,LOW);

  digitalWrite(3,HIGH);
  digitalWrite(3,LOW);

  digitalWrite(7,HIGH);
  digitalWrite(7,LOW);
  //Serial.begin(9600);
  BT.begin(9600);

  PT_INIT(&cronometro);
  PT_INIT(&marcador);
}

void loop() 
{
  
  
   marcadorF(&marcador);
  
   ////digitalWrite(pinDosPuntos,HIGH);
  
  cronometroF(&cronometro);
// digitalWrite(pinDosPuntos,LOW);
  vectorCaracteres="";
  
  //delay(500);
 


}
void cronometroF(struct pt *pt){
  PT_BEGIN(pt);
  //setup
 //Serial.print(minutos);
 //loop
 static long t=0;
 
 
  do{
        char led[10];
  //cronometroF(&cronometro);
  //marcadorF(&marcador);
   while (BT.available()) {
  char CharEntrada = BT.read(); //Leer un byte del puerto serial
   
    vectorCaracteres += CharEntrada;  //Agregar el char anterior al string
  }
 vectorCaracteres.toCharArray(led,10);
 minutos=atoi(led);
       
       //Serial.println(minutos);
       if(minutos>0){
        digitalWrite(3,HIGH);
  digitalWrite(3,LOW);

  digitalWrite(7,HIGH);
  digitalWrite(7,LOW);
    for(i=0;i<minutos;i++){
      if(i<minutos){
        
            auxSeg=58;
            }else{
            auxSeg=58;
            }
           
            
         while(j<=auxSeg){
          
          
         // Serial.println("Alerta3");
          // Serial.println(j);
          enviarPulso(pinInitSeg);
          // Serial.println("Alerta4");
           
         //  Serial.println("Alerta5");
           t=millis();
           if(j%2!=0){
      digitalWrite(pinDosPuntos,HIGH);
           }else{    
//delay(500);

digitalWrite(pinDosPuntos,LOW);
           }
PT_WAIT_WHILE(pt, (millis()-t)<1000);

//delay(500);
          // PT_WAIT_WHILE(pt, (millis()-t)<1000);
           
            //PT_WAIT_WHILE(pt, (millis()-t)<1000);
          if(j==58){
            enviarPulso(pinResetSeg);
            }
             j++;
           //  Serial.println("Alerta6");
          }
          j=0;
          enviarPulso(pinInitMin);    
                
      }
      minutos=0;
  }
    }while(true);
    PT_END(pt);
  }

  
void marcadorF(struct pt *pt){
  PT_BEGIN(pt);
  
  // Serial.println(opcion);
  
  //setup

  
  //loop
 
    static long t=0;
   
 do{
  char opcion;
  //cronometroF(&cronometro);
  //marcadorF(&marcador);
   
opcion = BT.read(); //Leer un byte del puerto serial
   
    //vectorCaracteres += CharEntrada;  //Agregar el char anterior al string
  
 //vectorCaracteres.toCharArray(opcion,10);
 
    if (true)
 
 {
 
 if (opcion=='c')//boton aumentar Local
 {
aumentarLocal();
golesLocal+=1;
 }else
 if (opcion=='d')//boton disminuir local
 {
 
 if(golesLocal>0){
 golesLocal= disminuirLocal(golesLocal-1);
 }
  }else
  if (opcion=='a')//boton aumentar visita
 {
aumentarVisita();
golesVisita+=1;  
  }else
  if (opcion=='b')//boton disminuir visita
 {
  
  if(golesVisita>0){
  golesVisita= disminuirVisita(golesVisita-1);
  }
  }
 
}
  t=millis();
   PT_WAIT_WHILE(pt, (millis()-t)<1000);
 }while(true);
 PT_END(pt);
  }

  void enviarPulso(int pin){
      digitalWrite(pin,HIGH);
      
        digitalWrite(pin,LOW);
    }

    void aumentarLocal(){
      enviarPulso(pinSubirLocal);
      }

      void aumentarVisita(){
        enviarPulso(pinSubirVisita);
        }

      void reset(int pin){
       
        digitalWrite(pin,HIGH);
    
        digitalWrite(pin,LOW);
        }  

        int disminuirLocal(int cantidad){
          int i;
          
          reset(pinResetLocal);
          for(i=0;i<cantidad;i++){
            aumentarLocal();
          
            }
            return cantidad;
          }
            int disminuirVisita(int cantidad){
          int i;
         
          
          reset(pinResetVisita);
          
          for(i=0;i<cantidad;i++){
            aumentarVisita();
           
            }
            return cantidad;
          }
