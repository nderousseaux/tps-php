Question n°4
  -------------------------------------------
  > Dans Postman ou votre navigateur, supprimez le cookie de session `PHPSSID` puis rechargez la page. Que se passe-t-il ?
  
  Le conteur est réinitialisé. En effet, sans l'identifiant de la session, le serveur php ne peut pas reprendre la session en cours, et est obligé de lancer une nouvelle session, donc de créer une nouvelle instance de la variable counter.
  
 