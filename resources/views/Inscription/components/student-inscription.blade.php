<div class="max-w-2xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-green-600 mb-6 text-center">Inscription Étudiant</h1>
    <p class="text-gray-600 mb-8 text-center">Remplissez ce formulaire pour vous inscrire en tant qu'étudiant au Congrès International de Coaching 2025.</p>
    
    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 mb-8">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Tarifs d'inscription Étudiant</h2>
            <div class="space-y-2">
                <div class="flex justify-between items-center bg-green-50 p-3 rounded-md">
                    <span class="font-medium">Inscription standard</span>
                    <span class="font-bold text-green-700">150 TND</span>
                </div>
                <div class="flex justify-between items-center bg-gray-50 p-3 rounded-md">
                    <span class="font-medium">Inscription précoce (jusqu'au 1er juin)</span>
                    <span class="font-bold text-green-700">120 TND</span>
                </div>
                <div class="flex justify-between items-center bg-gray-50 p-3 rounded-md">
                    <span class="font-medium">Groupe d'étudiants (4+)</span>
                    <span class="font-bold text-green-700">100 TND / personne</span>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-3">Les frais d'inscription comprennent l'accès à toutes les conférences, ateliers, pauses café et le matériel du congrès.</p>
            <p class="text-sm font-medium text-red-600 mt-1">* Une carte d'étudiant valide sera demandée lors de l'enregistrement sur place.</p>
        </div>
    </div>
    
    <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
        @csrf
        
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Informations personnelles</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="firstname" class="block text-sm font-medium text-gray-700 mb-1">Prénom <span class="text-red-600">*</span></label>
                    <input type="text" id="firstname" name="firstname" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="lastname" class="block text-sm font-medium text-gray-700 mb-1">Nom <span class="text-red-600">*</span></label>
                    <input type="text" id="lastname" name="lastname" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-600">*</span></label>
                    <input type="email" id="email" name="email" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone <span class="text-red-600">*</span></label>
                    <input type="tel" id="phone" name="phone" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="birthdate" class="block text-sm font-medium text-gray-700 mb-1">Date de naissance <span class="text-red-600">*</span></label>
                    <input type="date" id="birthdate" name="birthdate" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Pays <span class="text-red-600">*</span></label>
                    <select id="country" name="country" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez un pays</option>
                        <option value="TN">Tunisie</option>
                        <option value="FR">France</option>
                        <option value="MA">Maroc</option>
                        <option value="DZ">Algérie</option>
                        <option value="SN">Sénégal</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
                
                <div>
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Ville <span class="text-red-600">*</span></label>
                    <input type="text" id="city" name="city" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
        </div>
        
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Informations académiques</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="university" class="block text-sm font-medium text-gray-700 mb-1">Établissement / Université <span class="text-red-600">*</span></label>
                    <input type="text" id="university" name="university" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="study_field" class="block text-sm font-medium text-gray-700 mb-1">Domaine d'études <span class="text-red-600">*</span></label>
                    <select id="study_field" name="study_field" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="psychology">Psychologie</option>
                        <option value="business">Management / Commerce</option>
                        <option value="education">Sciences de l'éducation</option>
                        <option value="hr">Ressources humaines</option>
                        <option value="communication">Communication</option>
                        <option value="sociology">Sociologie</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
                
                <div>
                    <label for="study_level" class="block text-sm font-medium text-gray-700 mb-1">Niveau d'études <span class="text-red-600">*</span></label>
                    <select id="study_level" name="study_level" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="licence1">Licence 1</option>
                        <option value="licence2">Licence 2</option>
                        <option value="licence3">Licence 3</option>
                        <option value="master1">Master 1</option>
                        <option value="master2">Master 2</option>
                        <option value="doctorat">Doctorat</option>
                        <option value="other">Autre formation</option>
                    </select>
                </div>
                
                <div>
                    <label for="student_id" class="block text-sm font-medium text-gray-700 mb-1">Numéro de carte d'étudiant <span class="text-red-600">*</span></label>
                    <input type="text" id="student_id" name="student_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                    <p class="text-xs text-gray-500 mt-1">Vous devrez présenter votre carte d'étudiant lors de l'enregistrement sur place.</p>
                </div>
            </div>
        </div>
        
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Motivation</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="interests" class="block text-sm font-medium text-gray-700 mb-1">Quels aspects du coaching vous intéressent le plus ? <span class="text-red-600">*</span></label>
                    <div class="grid grid-cols-2 gap-2 mt-1">
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="theory" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Théories et modèles</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="skills" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Techniques et compétences</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="career" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Perspectives de carrière</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="research" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Recherche et innovation</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="networking" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Réseautage professionnel</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="certification" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Certification</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="motivation" class="block text-sm font-medium text-gray-700 mb-1">Pourquoi souhaitez-vous participer à ce congrès ? <span class="text-red-600">*</span></label>
                    <textarea id="motivation" name="motivation" rows="3" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"></textarea>
                </div>
            </div>
        </div>
        
        <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Participation</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="package" class="block text-sm font-medium text-gray-700 mb-1">Forfait d'inscription <span class="text-red-600">*</span></label>
                    <select id="package" name="package" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez un forfait</option>
                        <option value="early">Inscription précoce (120 TND)</option>
                        <option value="standard">Inscription standard (150 TND)</option>
                        <option value="group">Groupe d'étudiants (100 TND)</option>
                    </select>
                </div>
                
                <div id="group_members" style="display: none;">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Noms des autres membres du groupe</label>
                    <textarea name="group_members" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Un nom par ligne (minimum 3 autres étudiants)"></textarea>
                    <p class="text-xs text-gray-500 mt-1">Chaque membre du groupe doit remplir son propre formulaire d'inscription.</p>
                </div>
                
                <div>
                    <label for="workshop" class="block text-sm font-medium text-gray-700 mb-1">Atelier souhaité (places limitées)</label>
                    <select id="workshop" name="workshop" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez un atelier</option>
                        <option value="workshop1">Introduction au coaching</option>
                        <option value="workshop2">Outils de base du coach</option>
                        <option value="workshop3">Comment démarrer sa carrière de coach</option>
                        <option value="workshop4">Intelligence émotionnelle</option>
                    </select>
                </div>
                
                <div>
                    <label for="dietary" class="block text-sm font-medium text-gray-700 mb-1">Restrictions alimentaires</label>
                    <input type="text" id="dietary" name="dietary" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Végétarien, sans gluten, etc.">
                </div>
            </div>
        </div>
        
        <div class="mb-6">
            <label class="flex items-start">
                <input type="checkbox" name="terms" required class="rounded border-gray-300 text-green-600 focus:ring-green-500 mt-1">
                <span class="ml-2 text-sm text-gray-700">J'accepte les <a href="#" class="text-green-600 hover:text-green-800">conditions générales</a> et la <a href="#" class="text-green-600 hover:text-green-800">politique de confidentialité</a> du congrès. <span class="text-red-600">*</span></span>
            </label>
        </div>
        
        <div class="mb-6">
            <label class="flex items-start">
                <input type="checkbox" name="marketing" class="rounded border-gray-300 text-green-600 focus:ring-green-500 mt-1">
                <span class="ml-2 text-sm text-gray-700">J'accepte de recevoir des informations sur les futurs événements et des ressources liées au coaching.</span>
            </label>
        </div>
        
        <div class="text-center">
            <button type="submit" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md font-medium hover:bg-green-700 transition-colors">
                Valider mon inscription
            </button>
            <p class="text-xs text-gray-500 mt-3">Les champs marqués d'un <span class="text-red-600">*</span> sont obligatoires</p>
        </div>
    </form>
</div>

<script>
    // Simple script to show/hide group members textarea
    document.addEventListener('DOMContentLoaded', function() {
        const packageSelect = document.getElementById('package');
        const groupMembers = document.getElementById('group_members');
        
        packageSelect.addEventListener('change', function() {
            if (this.value === 'group') {
                groupMembers.style.display = 'block';
            } else {
                groupMembers.style.display = 'none';
            }
        });
    });
</script>