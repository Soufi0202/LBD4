<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="html"/>
   <xsl:template match="/">
       <html>
            <body>
                <h1>HELLO !</h1>
                <table border="1">
                        <tr>
                        <td width="80" style="color:red">NAME</td>
                        <td width="80" style="color:red">PRICE</td>
                        <td width="80" style="color:red">DESCRIPTION</td>
                        <td width="80" style="color:red">CALORIES</td>
                        </tr>

                    <xsl:for-each select="breakfast_menu/food">
                    <tr>
                    <td width="80"><xsl:value-of select="name"/></td>
                    <td width="80"><xsl:value-of select="price"/></td>
                    <td width="80"><xsl:value-of select="description"/></td>
                    <td width="80"><xsl:value-of select="calories"/></td>
                    </tr>

                    </xsl:for-each>
                
                    </table>
            </body>
       </html>
   </xsl:template>
</xsl:stylesheet>