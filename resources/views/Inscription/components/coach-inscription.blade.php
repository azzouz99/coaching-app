<div class="max-w-2xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-green-600 mb-6 text-center">Inscription Coach</h1>
    <p class="text-gray-600 mb-8 text-center">Remplissez ce formulaire pour vous inscrire en tant que coach au Congrès International de Coaching 2025.</p>
    
    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 mb-8">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Tarifs d'inscription</h2>
            <div class="space-y-2">
                <div class="flex justify-between items-center bg-green-50 p-3 rounded-md">
                    <span class="font-medium">Inscription standard</span>
                    <span class="font-bold text-green-700">450 TND</span>
                </div>
                <div class="flex justify-between items-center bg-gray-50 p-3 rounded-md">
                    <span class="font-medium">Inscription précoce (jusqu'au 1er juin)</span>
                    <span class="font-bold text-green-700">350 TND</span>
                </div>
                <div class="flex justify-between items-center bg-gray-50 p-3 rounded-md">
                    <span class="font-medium">Membres d'associations partenaires</span>
                    <span class="font-bold text-green-700">380 TND</span>
                </div>
            </div>
            <p class="text-sm text-gray-500 mt-3">Les frais d'inscription comprennent l'accès à toutes les conférences, ateliers, pauses café, déjeuners et le matériel du congrès.</p>
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
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Informations professionnelles</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="company" class="block text-sm font-medium text-gray-700 mb-1">Organisation / Cabinet</label>
                    <input type="text" id="company" name="company" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="job_title" class="block text-sm font-medium text-gray-700 mb-1">Titre professionnel <span class="text-red-600">*</span></label>
                    <input type="text" id="job_title" name="job_title" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="experience" class="block text-sm font-medium text-gray-700 mb-1">Années d'expérience en coaching <span class="text-red-600">*</span></label>
                    <select id="experience" name="experience" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="0-2">0-2 ans</option>
                        <option value="3-5">3-5 ans</option>
                        <option value="6-10">6-10 ans</option>
                        <option value="11+">Plus de 10 ans</option>
                    </select>
                </div>
                
                <div>
                    <label for="certification" class="block text-sm font-medium text-gray-700 mb-1">Certifications (séparées par des virgules)</label>
                    <input type="text" id="certification" name="certification" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                
                <div>
                    <label for="specialties" class="block text-sm font-medium text-gray-700 mb-1">Spécialités de coaching <span class="text-red-600">*</span></label>
                    <div class="grid grid-cols-2 gap-2 mt-1">
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="specialties[]" value="life" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Coaching de vie</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="specialties[]" value="executive" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Coaching exécutif</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="specialties[]" value="business" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Coaching d'entreprise</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="specialties[]" value="career" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Coaching de carrière</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="specialties[]" value="team" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Coaching d'équipe</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="specialties[]" value="sport" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Coaching sportif</span>
                            </label>
                        </div>
                    </div>
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
                        <option value="early">Inscription précoce (350 TND)</option>
                        <option value="standard">Inscription standard (450 TND)</option>
                        <option value="member">Membre d'association partenaire (380 TND)</option>
                    </select>
                </div>
                
                <div>
                    <label for="workshop" class="block text-sm font-medium text-gray-700 mb-1">Atelier souhaité (places limitées)</label>
                    <select id="workshop" name="workshop" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez un atelier</option>
                        <option value="workshop1">Le coaching systémique dans les organisations</option>
                        <option value="workshop2">Techniques avancées de questionnement</option>
                        <option value="workshop3">Intelligence émotionnelle et coaching</option>
                        <option value="workshop4">Coaching et neurosciences</option>
                    </select>
                </div>
                
                <div>
                    <label for="dietary" class="block text-sm font-medium text-gray-700 mb-1">Restrictions alimentaires</label>
                    <input type="text" id="dietary" name="dietary" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Végétarien, sans gluten, etc.">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Souhaitez-vous participer à la soirée de gala ? (26 juillet, 150 TND)</label>
                    <div class="mt-1 space-x-6">
                        <label class="inline-flex items-center">
                            <input type="radio" name="gala" value="yes" class="text-green-600 focus:ring-green-500">
                            <span class="ml-2 text-sm text-gray-700">Oui</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="gala" value="no" class="text-green-600 focus:ring-green-500" checked>
                            <span class="ml-2 text-sm text-gray-700">Non</span>
                        </label>
                    </div>
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