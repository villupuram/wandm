Le gabarit a �t� adapt� pour Pluxml mais fonctionne seulement apr�s avoir:
- install� le plugin Vignette
- cr�� quelques articles comportant toujours une vignette, et destin� au moins 3 d'entre eux � la page d'accueil
- cr�� un r�pertoire nomm� "cache" au niveau racine de Pluxml
- d�plac� le fichier img.php du pr�sent r�pertoire dans le niveau racine de Pluxml
- d�plac� le fichier class.plx.show.php du pr�sent r�pertoire dans le niveau core/lib/ de Pluxml pour �craser celui qui s'y trouve (si vous avez toujours l'original!).  Il est tr�s l�g�rement modifi� et n'affectera rien qui roule d�j�, une seule fonction y a �t� ajout�e au tout d�but.


Le carrousel de la page d'accueil utilise la liste d'articles qui font partie de la cat�gorie "page d'accueil".

Le logo et certains autres �l�ments visuels du gabarit original ont �t� laiss�s en place pour garder les proportions, il devra �videmment �tre remplac� par une image de votre choix.

Le gabarit fait une utilisation �labor�e du magnifique plugin Vignette (cr�� par Rockyhorror au http://thepoulpe.net/index.php?article20/plugin-vignette) mais �galement de l'utilitaire de rognage cImage qui est compl�tement encapsul� dans le fichier "img.php".  L'image de vignette obligatoire assign�e � un article est alors "tranch�e" dans la plus grande r�solution possible mais en respectant le gabarit selon la page.  Nul besoin de cr�er des miniatures, vous n'en aurez jamais besoin.  Si les images n'apparaissent pas, v�rifiez si vous avez bien cr�� un r�pertoire vide appel� "cache" au niveau racine de Pluxml.  Pour plus d'information sur ce puissant utilitaire, consulter le site de son cr�ateur au http://dbwebb.se/opensource/cimage .

