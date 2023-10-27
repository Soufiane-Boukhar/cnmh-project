````bash
php artisan infyom:scaffold Project --fromTable --table=projects -n

php artisan infyom:scaffold CouvertureMedical --fromTable --table=couverture_medicals
php artisan infyom:scaffold TypeHandicap --fromTable --table=type_handicaps
php artisan infyom:scaffold Service --fromTable --table=services
php artisan infyom:scaffold NiveauScolaire --fromTable --table=niveau_scolaires
php artisan infyom:scaffold EtatCivil --fromTable --table=etat_civils
php artisan infyom:scaffold Employe --fromTable --table=employes

php artisan infyom:scaffold Reclamation --fromTable --table=reclamations
php artisan infyom:scaffold Fonction --fromTable --table=fonctions
php artisan infyom:scaffold Patient --fromTable --table=patients
php artisan infyom:scaffold DossierPatient --fromTable --table=dossier_patients
php artisan infyom:scaffold OrientationExterne --fromTable --table=orientation_externes
php artisan infyom:scaffold Consultation --fromTable --table=consultations
php artisan infyom:scaffold RendezVous --fromTable --table=rendez_vous

php artisan infyom:scaffold Tuteur --fromTable --table=tuteurs // Not used.

php artisan infyom:scaffold MenuGroup --fromTable --table=menu_groups
php artisan infyom:scaffold MenuItem --fromTable --table=menu_items
````