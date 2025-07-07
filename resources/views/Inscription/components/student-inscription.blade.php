<x-inscription-layout>
<div class="max-w-2xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-green-600 mb-6 text-center">Inscription au Congrès</h1>
    <div class="text-gray-600 mb-8 text-center">
        <h2 class="text-xl font-bold mb-2">2ème CONGRÈS DE MÉDECINE ISLAMIQUE</h2>
        <p class="font-semibold">KAIROUAN, DU 09 AU 11 OCTOBRE 2025</p>
        <p class="font-semibold">HÔTEL LE CONTINENTAL</p>
        <p class="mt-4 text-red-600 font-medium">La date limite d'inscription est fixée au 28 Septembre 2025</p>
    </div>
    
    <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200 mb-8">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Frais d'inscription au congrès</h2>
            <p class="text-sm text-gray-700 italic mb-4">L'inscription n'est prise en compte que si le paiement est effectué.</p>
            <div class="space-y-4">
                <div class="bg-gray-50 p-4 rounded-md">
                    <h3 class="font-bold text-gray-800 mb-2">Médecin et pharmacien</h3>
                    <p class="text-sm text-gray-700 mb-2">Le montant total de 230 DT inclut les frais d'inscription au congrès (180 DT) ainsi que la cotisation à la Société Tunisienne de Médecine islamique (50 DT).</p>
                    <p class="text-sm text-gray-700 mb-3">Les frais d'inscription couvrent uniquement l'accès aux conférences.</p>
                    <div class="flex justify-between items-center bg-green-50 p-3 rounded-md">
                        <span class="font-medium">Tarif</span>
                        <span class="font-bold text-green-700">230 DT</span>
                    </div>
                </div>
                
                <div class="bg-green-50 p-4 rounded-md">
                    <h3 class="font-bold text-gray-800 mb-2">Résident et étudiant</h3>
                    <p class="text-sm text-gray-700 mb-2">Les frais incluent la participation aux conférences ainsi que les frais d'hôtel et les repas.</p>
                    <div class="flex justify-between items-center bg-white p-3 rounded-md">
                        <span class="font-medium">Tarif</span>
                        <span class="font-bold text-green-700">150 DT</span>
                    </div>
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
                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">Adresse postal <span class="text-red-600">*</span></label>
                    <input type="text" id="city" name="city" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>

                <div>
                    <label for="profession" class="block text-sm font-medium text-gray-700 mb-1">Profession <span class="text-red-600">*</span></label>
                    <input type="text" id="profession" name="profession" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
                <div>
                    <label for="institution" class="block text-sm font-medium text-gray-700 mb-1">Institution <span class="text-red-600">*</span></label>
                    <input type="text" id="institution" name="institution" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                </div>
            </div>
        </div>
        
        {{-- <div class="mb-6">
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
                        <option value="medicine">Médecine</option>
                        <option value="pharmacy">Pharmacie</option>
                        <option value="dentistry">Médecine dentaire</option>
                        <option value="nursing">Soins infirmiers</option>
                        <option value="biology">Biologie médicale</option>
                        <option value="islamic_studies">Études islamiques</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
                
                <div>
                    <label for="study_level" class="block text-sm font-medium text-gray-700 mb-1">Niveau d'études <span class="text-red-600">*</span></label>
                    <select id="study_level" name="study_level" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="externat">Externat</option>
                        <option value="internat">Internat</option>
                        <option value="resident">Résident</option>
                        <option value="master">Master</option>
                        <option value="doctorat">Doctorat</option>
                        <option value="specialisation">Spécialisation médicale</option>
                        <option value="other">Autre formation</option>
                    </select>
                </div>
                
                <div>
                    <label for="student_id" class="block text-sm font-medium text-gray-700 mb-1">Numéro de carte d'étudiant <span class="text-red-600">*</span></label>
                    <input type="text" id="student_id" name="student_id" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                    <p class="text-xs text-gray-500 mt-1">Vous devrez présenter votre carte d'étudiant lors de l'enregistrement sur place.</p>
                </div>
            </div>
        </div> --}}
        
        {{-- <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Intérêt et participation</h2>
            
            <div class="space-y-4">
                <div>
                    <label for="interests" class="block text-sm font-medium text-gray-700 mb-1">Quels thèmes vous intéressent le plus ? <span class="text-red-600">*</span></label>
                    <div class="grid grid-cols-2 gap-2 mt-1">
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="ethics" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Éthique médicale islamique</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="nutrition" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Nutrition en Islam</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="fiqh" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Fiqh médical</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="prophetic" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Médecine prophétique</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="mental" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Santé mentale et spiritualité</span>
                            </label>
                        </div>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="checkbox" name="interests[]" value="research" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                                <span class="ml-2 text-sm text-gray-700">Recherche et innovation</span>
                            </label>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label for="motivation" class="block text-sm font-medium text-gray-700 mb-1">Pourquoi souhaitez-vous participer à ce congrès ? <span class="text-red-600">*</span></label>
                    <textarea id="motivation" name="motivation" rows="3" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500"></textarea>
                </div>
            </div>
        </div> --}}
        
        {{-- <div class="mb-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4 pb-2 border-b border-gray-200">Participation et hébergement</h2>
            
            <div class="space-y-4">
                <div>
                    <div class="block text-sm font-medium text-gray-700 mb-2">Type de participation <span class="text-red-600">*</span></div>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="radio" name="participation_type" value="full" required class="border-gray-300 text-green-600 focus:ring-green-500">
                            <span class="ml-2 text-sm text-gray-700">Participation complète (conférences + hébergement)</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="participation_type" value="dayonly" required class="border-gray-300 text-green-600 focus:ring-green-500">
                            <span class="ml-2 text-sm text-gray-700">Participation journalière (sans hébergement)</span>
                        </label>
                    </div>
                </div>
                
                <div>
                    <label for="arrival_date" class="block text-sm font-medium text-gray-700 mb-1">Date d'arrivée (pour hébergement) <span class="text-red-600">*</span></label>
                    <select id="arrival_date" name="arrival_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="09-10-2025">09 octobre 2025</option>
                        <option value="10-10-2025">10 octobre 2025</option>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Uniquement si vous avez choisi la participation complète</p>
                </div>
                
                <div>
                    <label for="departure_date" class="block text-sm font-medium text-gray-700 mb-1">Date de départ <span class="text-red-600">*</span></label>
                    <select id="departure_date" name="departure_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="10-10-2025">10 octobre 2025</option>
                        <option value="11-10-2025">11 octobre 2025</option>
                    </select>
                    <p class="text-xs text-gray-500 mt-1">Uniquement si vous avez choisi la participation complète</p>
                </div> --}}
                
                {{-- <div>
                    <label for="workshop" class="block text-sm font-medium text-gray-700 mb-1">Atelier souhaité (places limitées)</label>
                    <select id="workshop" name="workshop" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez un atelier</option>
                        <option value="workshop1">Éthique médicale et cas pratiques</option>
                        <option value="workshop2">Cupping thérapie (Hijama)</option>
                        <option value="workshop3">Médecine prophétique dans la pratique quotidienne</option>
                        <option value="workshop4">Fiqh médical et questions contemporaines</option>
                    </select>
                </div>
                
                <div>
                    <label for="dietary" class="block text-sm font-medium text-gray-700 mb-1">Restrictions alimentaires</label>
                    <input type="text" id="dietary" name="dietary" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500" placeholder="Allergies, régime spécial, etc.">
                </div>
                
                <div>
                    <label for="payment_method" class="block text-sm font-medium text-gray-700 mb-1">Méthode de paiement <span class="text-red-600">*</span></label>
                    <select id="payment_method" name="payment_method" required class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
                        <option value="">Sélectionnez</option>
                        <option value="bank_transfer">Virement bancaire</option>
                        <option value="on_site">Paiement sur place</option>
                    </select>
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
        </div> --}}
        
        <div class="text-center">
            <button type="submit" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md font-medium hover:bg-green-700 transition-colors">
                Valider mon inscription
            </button>
            <p class="text-xs text-gray-500 mt-3">Les champs marqués d'un <span class="text-red-600">*</span> sont obligatoires</p>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const participationType = document.querySelectorAll('input[name="participation_type"]');
        const arrivalDate = document.getElementById('arrival_date');
        const departureDate = document.getElementById('departure_date');
        
        function updateFields() {
            const fullParticipation = document.querySelector('input[name="participation_type"][value="full"]').checked;
            
            arrivalDate.required = fullParticipation;
            departureDate.required = fullParticipation;
            
            arrivalDate.closest('div').style.display = fullParticipation ? 'block' : 'none';
            departureDate.closest('div').style.display = fullParticipation ? 'block' : 'none';
        }
        
        participationType.forEach(function(radio) {
            radio.addEventListener('change', updateFields);
        });
        
        // Initial setup
        updateFields();
    });
</script>
</x-inscription-layout>