<x-inscription-layout>
<div class="max-w-4xl mx-auto py-8 px-4">
    <h1 class="text-3xl font-bold text-green-600 mb-6 text-center">PROJET DE RECHERCHE EN PATHOLOGIE ORL ET PNEUMOLOGIE</h1>
    <p class="text-gray-600 mb-8 text-center">Instauré sous l'égide de CETMI (Centre d'étude Tunisienne De Médecine Islamique)</p>
    
    
    <!-- Formulaire de soumission de travaux scientifiques -->
    <div id="soumission" class="bg-white p-8 rounded-lg shadow-md border border-gray-200 mb-8">
        
        <form action="#" method="POST" class="space-y-6">
            @csrf
            <div class="bg-green-50 p-4 rounded-md mb-6">
                <h4 class="text-lg font-medium text-green-800 mb-2">FICHE RÉSUMÉ</h4>
                <p class="text-sm text-green-700">Veuillez remplir tous les champs ci-dessous. Le résumé ne doit pas dépasser une page.</p>
            </div>
            
            <div class="space-y-4">
                <div>
                    <label for="titre" class="block text-sm font-medium text-gray-700 mb-1">Titre du projet de recherche</label>
                    <textarea id="titre" name="titre" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none" placeholder="Entrez le titre complet de votre projet de recherche..."></textarea>
                </div>
                
                <div>
                    <label for="themes" class="block text-sm font-medium text-gray-700 mb-1">Thème(s)</label>
                    <input type="text" id="themes" name="themes" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Ex: Amygdalite, Asthme, etc.">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Type de recherche</label>
                    <div class="flex space-x-6">
                        <div class="flex items-center">
                            <input id="type-preclinique" name="type_recherche" type="radio" value="preclinique" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300">
                            <label for="type-preclinique" class="ml-2 block text-sm text-gray-700">Recherche expérimentale ou préclinique</label>
                        </div>
                        <div class="flex items-center">
                            <input id="type-clinique" name="type_recherche" type="radio" value="clinique" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300">
                            <label for="type-clinique" class="ml-2 block text-sm text-gray-700">Recherche clinique</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-200 pt-6 mt-6">
                <h4 class="text-lg font-medium text-gray-800 mb-4">Directeur de projet</h4>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom</label>
                        <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="prenom" class="block text-sm font-medium text-gray-700 mb-1">Prénom</label>
                        <input type="text" id="prenom" name="prenom" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="titre-academique" class="block text-sm font-medium text-gray-700 mb-1">Titre</label>
                        <input type="text" id="titre-academique" name="titre_academique" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Ex: Professeur, Docteur, etc.">
                    </div>
                    
                    <div>
                        <label for="fonction" class="block text-sm font-medium text-gray-700 mb-1">Fonction</label>
                        <input type="text" id="fonction" name="fonction" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service / Laboratoire</label>
                        <input type="text" id="service" name="service" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="institution" class="block text-sm font-medium text-gray-700 mb-1">Institution</label>
                        <input type="text" id="institution" name="institution" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div class="md:col-span-2">
                        <label for="adresse" class="block text-sm font-medium text-gray-700 mb-1">Adresse</label>
                        <input type="text" id="adresse" name="adresse" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="email-projet" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email-projet" name="email_projet" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="telephone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Ex: 71 123 456">
                    </div>
                    
                    <div>
                        <label for="fax" class="block text-sm font-medium text-gray-700 mb-1">Fax</label>
                        <input type="tel" id="fax" name="fax" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Ex: 71 123 456">
                    </div>
                    
                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-700 mb-1">Mobile</label>
                        <input type="tel" id="mobile" name="mobile" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" placeholder="Ex: 51 123 456">
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-200 pt-6 mt-6">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="mb-4 md:mb-0">
                        <div class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Date limite de soumission : <strong>11 septembre 2025</strong></span>
                        </div>
                    </div>
                    
                    <div class="md:ml-4">
                        <button type="submit" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md font-medium hover:bg-green-700 transition-colors">Soumettre mon projet</button>
                    </div>
                </div>
            </div>
        </form>
        
        {{-- <div class="mt-8 pt-6 border-t border-gray-200 text-center">
            <p class="text-sm text-gray-600">Vous pouvez également télécharger le formulaire au format PDF et l'envoyer par email à <a href="mailto:contact@cetmi.org" class="text-green-600 hover:underline">contact@cetmi.org</a></p>
            <a href="#" class="inline-flex items-center mt-2 text-green-600 hover:text-green-800 font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                <span>Télécharger le formulaire PDF</span>
            </a>
        </div> --}}
    </div>
</div>
</x-inscription-layout>