<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <!--[if (mso 16)]>
    <style type="text/css">
    a {text-decoration: none;}
    </style>
    <![endif]-->
    <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]-->
    <!--[if gte mso 9]>
<xml>
    <o:OfficeDocumentSettings>
    <o:AllowPNG></o:AllowPNG>
    <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
</xml>
<![endif]-->
</head>

<body>
    <div class="es-wrapper-color">
        <!--[if gte mso 9]>
   <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
    <v:fill type="tile" color="#cccccc"></v:fill>
   </v:background>
  <![endif]-->
        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                        <table class="es-content esd-footer-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="background-color: #ffffff;" width="600"
                                            cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p20t es-p20b es-p40r es-p40l"
                                                        esd-general-paddings-checked="true" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="520"
                                                                        valign="top" align="center">
                                                                        <table width="100%" cellspacing="0"
                                                                            cellpadding="0">
                                                                            <tbody>

                                                                                <tr>
                                                                                    <td class="esd-block-spacer es-p5t es-p20b"
                                                                                        align="left"
                                                                                        style="font-size:0">
                                                                                        <table width="5%"
                                                                                            height="100%"
                                                                                            cellspacing="0"
                                                                                            cellpadding="0"
                                                                                            border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td
                                                                                                        style="border-bottom: 2px solid #999999; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;">
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="esd-block-text"
                                                                                        align="left">
                                                                                        <p>Cher(e)
                                                                                            {{ env('ADMIN_NAME') }},
                                                                                        <p>
                                                                                            J'espère que ce message vous
                                                                                            trouve bien. Nous avons le
                                                                                            plaisir de vous informer
                                                                                            qu'un nouvel utilisateur a
                                                                                            laissé un message sur la
                                                                                            page de contact de notre
                                                                                            site. Veuillez trouver
                                                                                            ci-dessous les détails du
                                                                                            message
                                                                                        </p>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="esd-block-button es-p20t es-p20b"
                                                                                        align="left">
                                                                                        <!--[if mso]><a href="https://viewstripo.email/" target="_blank" hidden>
 <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" esdevVmlButton href="https://viewstripo.email/"
                style="height:41px; v-text-anchor:middle; width:151px" arcsize="0%" stroke="f"  fillcolor="#efefef">
  <w:anchorlock></w:anchorlock>
  <center style='color:#4a7eb0; font-family:arial, "helvetica neue", helvetica, "sans-serif"; font-size:15px; font-weight:400; line-height:15px;  mso-text-raise:1px'>Verify phone</center>
 </v:roundrect></a>
<![endif]-->
                                                                                        <!--[if !mso]><!-- -->
                                                                                        <p><span style="font: bolder">Nom
                                                                                                de l'utilisateur
                                                                                                :</span>
                                                                                            {{ $data['name'] }}</p>
                                                                                        <p><span style="font: bolder">Object :</span> {{ $data['subject'] }}</p>
                                                                                        <p><span style="font: bolder">Email
                                                                                                :</span>
                                                                                            {{ $data['email'] }}</p>
                                                                                        <p><span style="font: bolder">Contenu
                                                                                                du message :</span> <br>
                                                                                            {{ $data['message'] }}
                                                                                        </p>
                                                                                        <!--<![endif]-->
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
