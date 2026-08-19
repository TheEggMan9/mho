<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vérifiez votre adresse email</title>
  <style>

    body { 
      margin:0; 
      padding:0; 
      font-family:"Segoe UI",Tahoma,Geneva,Verdana,sans-serif; 
      background-color:#f4f4f4; 
    }

    .email-container { 
      max-width:600px; 
      margin:40px auto; 
      background:white; 
      border-radius:20px; 
      overflow:hidden; 
      box-shadow:0 20px 60px rgba(0,0,0,0.15); 
    }

    .email-header { 
      background:linear-gradient(135deg,#e74c3c 0%,#c0392b 100%); 
      padding:40px 30px; 
      text-align:center; 
    }

    .email-header h1 { 
      color:white; 
      font-size:32px; 
      margin:0 0 10px 0; 
      text-shadow:2px 2px 4px rgba(0,0,0,0.3); 
    }

    .email-header p { 
      color:rgba(255,255,255,0.9); 
      font-size:18px; 
      margin:0; 
    }

    .email-body { 
      padding:40px 30px; 
    }

    .welcome-message { 
      text-align:center; 
      margin-bottom:30px; 
    }

    .welcome-message h2 { 
      color:#2c3e50; 
      font-size:28px; 
      margin:0 0 15px 0; 
    }

    .welcome-message .user-name { 
      color:#e74c3c; 
      font-weight:bold; 
    }

    .welcome-message p { 
      color:#7f8c8d; 
      font-size:16px; 
      line-height:1.6; 
      margin:10px 0; 
    }

    .features-section { 
      background:#f8f9fa; 
      border-radius:15px; 
      padding:25px; 
      margin:30px 0; 
    }

    .feature-item { 
      margin-bottom:15px; 
      padding:15px; 
      background:white; 
      border-radius:10px; 
      border-left:4px solid #e74c3c; 
    }

    .feature-item:last-child { 
      margin-bottom:0; 
    }

    .feature-text strong { 
      color:#2c3e50; 
      display:block; 
      margin-bottom:3px; 
    }

    .feature-text span { 
      color:#7f8c8d; 
      font-size:14px; 
    }

    .cta-button { 
      text-align:center; 
      margin:30px 0; 
    }

    .cta-button a { 
      display:inline-block; 
      background:linear-gradient(135deg,#e74c3c,#c0392b); 
      color:white; 
      text-decoration:none; 
      padding:15px 40px; 
      border-radius:50px; 
      font-size:18px; 
      font-weight:600; 
      box-shadow:0 10px 30px rgba(231,76,60,0.4); 
    }

    .email-footer { 
      background:#2c3e50; 
      padding:25px 30px; 
      text-align:center; 
      color:rgba(255,255,255,0.7); 
      font-size:14px; 
    }

    .email-footer a { 
      color:#e74c3c; 
      text-decoration:none; 
    }

    @media only screen and (max-width:600px) {
      .email-container { 
        margin:20px; 
      }
      .email-header h1 { 
        font-size:24px; 
      }
      .welcome-message h2 { 
        font-size:22px; 
      }
      .email-body { 
        padding:30px 20px; 
      }
    }
  </style>
</head>
<body>

<div class="email-container">
  <div class="email-header">
    <h1>Marvel's Heroes Origins</h1>
    <p>Vérification de votre adresse email</p>
  </div>

  <div class="email-body">
    <div class="welcome-message">
      <h2>Bonjour <span class="user-name">{{ $prenom }}</span> !</h2>
      <p>Merci de vous être inscrit sur Marvel's Heroes Origins.</p>
      <p>Veuillez confirmer votre adresse email.</p>
    </div>

    <div class="features-section">
      <div class="feature-item">
        <div class="feature-text">
          <strong>Pourquoi vérifier votre email ?</strong>
          <span>Cela confirme que ce compte vous appartient bien et sécurise votre accès.</span>
        </div>
      </div>
    </div>

    <div class="cta-button">
      <a href="{{ $url }}">Vérifier mon adresse email</a>
    </div>

    <div style="text-align:center; color:#7f8c8d; font-size:14px; margin-top:30px;">
      <p>Si vous n'avez pas créé de compte, aucune action n'est requise.</p>
      <p>Si le bouton ne fonctionne pas, copiez-collez ce lien :</p>
      <p style="word-break:break-all;"><a href="{{ $url }}" style="color:#e74c3c;">{{ $url }}</a></p>
    </div>
  </div>

  <div class="email-footer">
    <p><strong>Marvel's Heroes Origins</strong></p>
    <p>© {{ date('Y') }} Tous droits réservés</p>
  </div>
</div>

</body>
</html>