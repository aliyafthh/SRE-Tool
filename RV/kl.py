/*Arkacaraka
KEYPAD dan lcd*/

#include <Keypad.h>
#include <LiquidCrystal.h>
#include <stdlib.h>
LiquidCrystal lcd(A0, A1, A2, A3, A4, A5);

int chance = 3;
int value;
int secret = 0;
const byte numRows= 4; //baris pada keypad
const byte numCols= 4; //Kolom pada keypad

/*keymap mendefinisikan tombol ditekan sesuai
dengan baris dan kolom seperti muncul pada keypad*/
char keymap[numRows][numCols]=
{
{'1', '2', '3', 'A'},
{'4', '5', '6', 'B'},
{'7', '8', '9', 'C'},
{'*', '0', '#', 'D'}
};


byte rowPins[numRows]= {9,8,7,6}; 
byte colPins[numCols]= {5,4,3,2}; 


Keypad myKeypad= Keypad(makeKeymap(keymap), rowPins, colPins, numRows, numCols);

void setup()
{
Serial.begin(9600);

  lcd.begin(16, 2);
  lcd.setCursor(1, 0);
  pinMode(10, OUTPUT);
  pinMode(11, OUTPUT);
  pinMode(12, OUTPUT);
  lcd.setCursor(4, 0);
  lcd.print("Guess the ");
  lcd.setCursor(3, 1);
  lcd.print("number game");
  delay(1500);
  lcd.clear();
  lcd.setCursor(6, 0);
  lcd.print("Start"); 
  lcd.setCursor(3, 1);
  lcd.print("enter value");
  secret = random(0, 9 + 1);
}

// Jika tombol ditekan, tombol ini disimpan dalam 'keypressed' variabel
// Jika kunci tidak sama dengan 'NO_KEY', maka tombol ini dicetak
// Jika jumlah = 17, maka penghitungan reset kembali ke 0 (ini berarti tidak ada tombol yang ditekan selama proses pemindaian seluruh keypad

void loop()
{
  
  
char keypressed = myKeypad.getKey();
value = int(keypressed);
value = value - 48;
if(chance > 0){
   if (keypressed)
    {
      if(value < secret)
      {
        lcd.clear();
        lcd.setCursor(3, 0);
        lcd.print("Chance : ");
        lcd.print(chance);
        Serial.print(keypressed);
        lcd.setCursor(2, 1);
        lcd.print(value);
        lcd.print(" is Too Low");
        digitalWrite(10, HIGH);
        delay(1500);
        digitalWrite(10, LOW);
        chance--;

       
      }
      else
      {
        if(value > secret)
        {
          lcd.clear();
          lcd.setCursor(3, 0);
          lcd.print("Chance : ");
          lcd.print(chance);
          Serial.print(keypressed);
          lcd.setCursor(2, 1);
          lcd.print(value);
          lcd.print(" is Too High");
          digitalWrite(11, HIGH);
                    delay(1500);
          digitalWrite(11, LOW);
          chance--;

          
          
        }
        else
        {
          lcd.clear();
          lcd.setCursor(3, 0);
          lcd.print("Chance : ");
          lcd.print(chance);
          Serial.print(keypressed);
          lcd.setCursor(2, 1);
          lcd.print(value);
          lcd.print(" is Correct");
          digitalWrite(12, HIGH);
          delay(1500);
          digitalWrite(12, LOW);
          chance = 0;

        }
      }
    
    }

}
else{

  lcd.clear();
  lcd.setCursor(4, 0);
  lcd.print("Press A");
  lcd.setCursor(2, 1);
  lcd.print("for Restart");
  char keypressed = myKeypad.getKey();
  if(keypressed == 'A'){
    chance+=3;
  	secret = random(0, 9 + 1);
    lcd.clear();
      lcd.setCursor(4, 0);
      lcd.print("Guess the ");
  lcd.setCursor(3, 1);
  lcd.print("number game");
  delay(1500);
  lcd.clear();
  lcd.setCursor(6, 0);
  lcd.print("Start"); 
  lcd.setCursor(3, 1);
  lcd.print("enter value");
  }
  
}
}