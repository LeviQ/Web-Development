<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
  <html lang = "pl">
    <head>
      <title> Faktura VAT z użyciem XML/XSLT </title>
      <style>
        #container{
              text-align:center;
              width: 1100px;
              height:1400px;
              background-image:url("Fakturka.jpg");
              background-size:cover;
              margin-left:auto;
              margin-right:auto;
        }

        #Naglowek{
            position:relative;
            top:30px;
            font-family: sans-serif;
            font-size: 30px;
            font-weight: bold;
        }

        #FakturaNR{
          height: 55px;
          width: 200px;
          top:65px;
          left:296px;
          position:relative;
          font-family: sans-serif;
          font-size: 25px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        #miejscowoscData{
          height: 28px;
          width: 431px;
          top: 9px;
          left: 562px;
          position:relative;
          font-family: sans-serif;
          font-weight: bold;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        #terminPlatnosci{
          height: 29px;
          width: 161px;
          top:95px;
          left: 122px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        #formaPlatnosci{
          height: 25px;
          width: 207px;
          top:67px;
          left: 300px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }


        #dataWykonania{
          height: 25px;
          width: 429px;
          top:43px;
          left: 562px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        #Sprzedawca{
          height: 113px;
          width: 385px;
          top:102px;
          left: 123px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        #Nabywca{
          height: 113px;
          width: 432px;
          top: -10px;
          left: 562px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        #NrKonta{
          height: 43px;
          width: 792px;
          top:20px;
          left: 172px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

         #Odebral{
          height: 106px;
          width: 393px;
          top:788px;
          left: 602px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

         #Wystawil{
          height: 136px;
          width: 396px;
          top:668px;
          left: 124px;
          position:relative;
          font-family: sans-serif;
          font-size: 20px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        .chair{      
          width: 827px;
          height: 34px;
          position:relative;
          top:-138px;
          left: 168px;
        }
         
         .nazwa{   
          width: 219px;
          height: 34px;
          position:relative;
          top: 2px;
          left: 2px;
          display: flex;
          align-items: center;
          justify-content:center;
        }

        .amount{     
          width: 63px;
          height: 34px;
          position:relative;
          top: -32px;
          left: 278px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

         .netto{   
          width: 92px;
          height: 34px;
          position:relative;
          top: -66px;
          left: 341px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

         .vat{    
          width: 65px;
          height: 34px;
          position:relative;
          top: -98px;
          left: 540px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

          .wartoscnetto{    
          width: 105px;
          height: 34px;
          position: relative;
          top: -135px;
          left: 434px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

        
          .wartoscvat{
          width: 93px;
          height: 34px;
          position: relative;
          top: -168px;
          left: 604px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

          .calosc{
          width: 126px;
          height: 34px;
          position: relative;
          top: -202px;
          left: 698px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

          #Sumanetto{
          width: 112px;
          height: 34px;
          position: relative;
          top: 82px;
          left: 598px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

         
          #Sumavat{
          width: 112px;
          height: 34px;
          position: relative;
          top: 47px;
          left: 763px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

        
           #Sumavatow{
          width: 142px;
          height: 34px;
          position: relative;
          top: 13px;
          left: 860px;
          display: flex;
          align-items: center;
          justify-content:center;
         }


          #Sumavatow2{
          width: 112px;
          height: 34px;
          font-size: 20px;
          position: relative;
          top: 201px;
          left: 249px;
          display: flex;
          align-items: center;
          justify-content:center;
         }
  
           #Gotowka{
          width: 112px;
          height: 34px;
          font-size: 20px;
          position: relative;
          top: 167px;
          left: 529px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

          #Reszta{
          width: 112px;
          height: 34px;
          font-size: 20px;
          position: relative;
          top: 133px;
          left: 829px;
          display: flex;
          align-items: center;
          justify-content:center;
         }

        </style>
    </head>
    <body>
      <div id = "container">
        <div id = "Naglowek">Faktura</div>
        <div id = "FakturaNR"><xsl:value-of select="dokument/FakturaNR"/></div>
        <div id = "miejscowoscData"><xsl:value-of select="dokument/miejscowoscData"/></div>
        <div id = "terminPlatnosci"><xsl:value-of select="dokument/terminPlatnosci"/></div>
        <div id = "formaPlatnosci"><xsl:value-of select="dokument/formaPlatnosci"/></div>
        <div id = "dataWykonania"><xsl:value-of select="dokument/dataWykonania"/></div>
        <div id = "Sprzedawca"><xsl:value-of select="dokument/Sprzedawca"/></div>
        <div id = "Nabywca"><xsl:value-of select="dokument/Nabywca"/></div>
        <div id = "NrKonta"><xsl:value-of select="dokument/NrKonta"/></div>
        <div id = "Odebral"><xsl:value-of select="dokument/Odebral"/></div>
        <div id = "Wystawil"><xsl:value-of select="dokument/Wystawil"/></div>

        <xsl:for-each select = "dokument/Towar/krzesło">
        <div class = "chair">
          <div class = "nazwa">
           <xsl:value-of select="name"/>
          </div>
          <div class = "amount">
           <xsl:value-of select="ilosc"/>
          </div>
          <div class = "netto">
           <xsl:value-of select="cenanetto"/>
          </div>
          <div class = "vat">
           <xsl:value-of select="stawkavat"/>
          </div>
          <div class = "wartoscnetto">
           <xsl:value-of select="(ilosc * cenanetto)"/>
          </div>
          <div class = "wartoscvat">
           <xsl:value-of select="((0.01 * stawkavat) * cenanetto)"/>
          </div>
          <div class = "calosc">
           <xsl:value-of select="((ilosc * cenanetto) * 1.23)"/>
          </div>
        </div>
        </xsl:for-each>
      <div id = "Sumanetto"><xsl:value-of select="(2400 + 2460 + 1760)"/></div>
      <div id = "Sumavat"><xsl:value-of select="(276 + 188.6 + 101.2)"/></div>
      <div id = "Sumavatow"><xsl:value-of select="(2952 + 3025.8 + 2164.8)"/></div>
      <div id = "Sumavatow2"><xsl:value-of select="(2952 + 3025.8 + 2164.8)"/></div>
      <div id = "Gotowka"><xsl:value-of select="(8200)"/></div>
      <div id = "Reszta"><xsl:value-of select="(57.40)"/></div>
      </div>
    </body>
  </html>
</xsl:template>
</xsl:stylesheet>
	