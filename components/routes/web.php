
Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::resource('couverture-medicals', App\Http\Controllers\CouvertureMedicalController::class);
Route::resource('type-handicaps', App\Http\Controllers\TypeHandicapController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('niveau-scolaires', App\Http\Controllers\NiveauScolaireController::class);
Route::resource('etat-civils', App\Http\Controllers\EtatCivilController::class);
Route::resource('employes', App\Http\Controllers\EmployeController::class);
Route::resource('reclamations', App\Http\Controllers\ReclamationController::class);
Route::resource('fonctions', App\Http\Controllers\FonctionController::class);
Route::resource('patients', App\Http\Controllers\PatientController::class);
Route::resource('dossier-patients', App\Http\Controllers\DossierPatientController::class);
Route::resource('orientation-externes', App\Http\Controllers\OrientationExterneController::class);
Route::resource('consultations', App\Http\Controllers\ConsultationController::class);
Route::resource('rendez-vouses', App\Http\Controllers\RendezVousController::class);