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
                        <td width="120" style="color:red">CATEGORY</td>
                        <td width="120" style="color:red">TITLE</td>
                        <td width="120" style="color:red">AUTHOR</td>
                        <td width="120" style="color:red">PUBLISHER</td>
                        <td width="120" style="color:red">YEAR</td>
                        <td width="120" style="color:red">PRICE</td>
                        </tr>

                    <xsl:for-each select="bookstore/book">
                    <tr>
                        <td width="120"><xsl:value-of select="category"/></td>
                        <td width="120"><xsl:value-of select="title"/></td>
                        <td width="120">
                            <xsl:for-each select="author">
                                <xsl:value-of select="."/>
                            </xsl:for-each>
                        </td>
                        <td width="120"><xsl:value-of select="publisher"/></td>
                        <td width="120"><xsl:value-of select="year"/></td>
                        <td width="120"><xsl:value-of select="price"/></td>
                    </tr>

                    </xsl:for-each>
                
                    </table>


                <h1>HI HHH !</h1>
                <table border="1">
                        <tr>
                        <td width="120" style="color:red">CATEGORY</td>
                        <td width="120" style="color:red">TITLE</td>
                        <td width="120" style="color:red">AUTHOR</td>
                        <td width="120" style="color:red">PUBLISHER</td>
                        <td width="120" style="color:red">YEAR</td>
                        <td width="120" style="color:red">PRICE</td>
                        </tr>

                    <xsl:for-each select="bookstore/book[category = 'web']">
                    <tr>
                        <td width="120">WEB</td>
                        <td width="120"><xsl:value-of select="title"/></td>
                        <td width="120">
                            <xsl:for-each select="author">
                                <xsl:value-of select="."/>
                            </xsl:for-each>
                        </td>
                        <td width="120"><xsl:value-of select="publisher"/></td>
                        <td width="120"><xsl:value-of select="year"/></td>
                        <td width="120"><xsl:value-of select="price"/></td>
                    </tr>

                    </xsl:for-each>
                
                    </table>


                <h1>QUESTION 3</h1>
                <table border="1">
                        <tr>
                        <td width="120" style="color:red">CATEGORY</td>
                        <td width="120" style="color:red">TITLE</td>
                        <td width="120" style="color:red">AUTHOR</td>
                        <td width="120" style="color:red">PUBLISHER</td>
                        <td width="120" style="color:red">YEAR</td>
                        <td width="120" style="color:red">PRICE</td>
                        </tr>

                    <xsl:for-each select="bookstore/book">
                    <xsl:sort select="price" data-type="number"/>
                    <tr>
                        <td width="120"><xsl:value-of select="category"/></td>
                        <td width="120"><xsl:value-of select="title"/></td>
                        <td width="120">
                            <xsl:for-each select="author">
                                <xsl:value-of select="."/>
                            </xsl:for-each>
                        </td>
                        <td width="120"><xsl:value-of select="publisher"/></td>
                        <td width="120"><xsl:value-of select="year"/></td>
                        <td width="120"><xsl:value-of select="price"/></td>
                    </tr>

                    </xsl:for-each>
                
                    </table>

                    
            </body>
       </html>
   </xsl:template>
</xsl:stylesheet>