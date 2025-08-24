<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHNIQUES TOPO — Bureau d'Études Topographiques</title>
    <meta name="description" content="Bureau d'Études Topographiques, Cartographiques et Cadastrales basé à Bamako (Mali). Prestations : routes, ouvrages d'art, voiries urbaines, aménagements hydro-agricoles, réseaux AEP, dossiers d'exécution BTP, plans cadastraux.">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0B5E8E',
                        secondary: '#0E7EB5',
                        accent: '#cfe8ff'
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'fade-in-left': 'fadeInLeft 0.6s ease-out',
                        'fade-in-right': 'fadeInRight 0.6s ease-out',
                        'bounce-in': 'bounceIn 0.8s ease-out'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(30px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes bounceIn {
            from { opacity: 0; transform: scale(0.3); }
            50% { opacity: 1; transform: scale(1.05); }
            to { opacity: 1; transform: scale(1); }
        }
        .gradient-bg {
            background: linear-gradient(135deg, #0B5E8E 0%, #0E7EB5 100%);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Top Bar -->
    <div class="bg-primary text-white py-2">
        <div class="container mx-auto px-4 flex justify-between items-center text-sm">
            <div class="flex items-center space-x-4">
                <span><i class="fas fa-map-marker-alt mr-2"></i>Bamako – Mali</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="tel:+22320207986" class="hover:text-accent transition-colors">
                    <i class="fas fa-phone mr-2"></i>+223 20 20 79 86
                </a>
                <a href="mailto:techniquestopomali@gmail.com" class="hover:text-accent transition-colors">
                    <i class="fas fa-envelope mr-2"></i>techniquestopomali@gmail.com
                </a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-4">
                    <div class="w-40 h-40 rounded-lg overflow-hidden">
                        <img src="logo.png" alt="Logo TECHNIQUES TOPO" class="w-full h-full object-contain">
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-primary">TECHNIQUES TOPO</h1>
                        <p class="text-gray-600 text-sm">Bureau d'Études Topographiques</p>
                    </div>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="text-gray-700 hover:text-primary transition-colors">Accueil</a>
                    <a href="#services" class="text-gray-700 hover:text-primary transition-colors">Services</a>
                    <a href="#equipe" class="text-gray-700 hover:text-primary transition-colors">Équipe</a>
                    <a href="#devis" class="text-gray-700 hover:text-primary transition-colors">Devis</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                    <a href="#newsletter" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors">Newsletter</a>
                </div>
                
                <button class="md:hidden text-gray-700" id="mobile-menu-btn">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-4 py-2 space-y-2 bg-gray-50">
                <a href="#accueil" class="block py-2 text-gray-700 hover:text-primary">Accueil</a>
                <a href="#services" class="block py-2 text-gray-700 hover:text-primary">Services</a>
                <a href="#equipe" class="block py-2 text-gray-700 hover:text-primary">Équipe</a>
                <a href="#devis" class="block py-2 text-gray-700 hover:text-primary">Devis</a>
                <a href="#contact" class="block py-2 text-gray-700 hover:text-primary">Contact</a>
                <a href="#newsletter" class="block py-2 text-primary font-semibold">Newsletter</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="gradient-bg text-white py-20">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-5xl font-bold mb-6 leading-tight">
                        Topographie, cartographie & cadastre pour vos projets
                    </h2>
                    <p class="text-xl mb-8 text-blue-100">
                        Études, implantations, dossiers d'exécution et plans cadastraux — intervention à Bamako et dans la sous‑région.
                    </p>
                    <div class="flex flex-wrap gap-3 mb-8">
                        <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm">Route & VRD</span>
                        <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm">Ouvrages d'art</span>
                        <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full text-sm">Hydro‑agricole & AEP</span>
                    </div>
                    <a href="#devis" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors inline-block">
                        Demander un devis
                    </a>
                </div>
                <div data-aos="fade-left" class="text-center">
                    <div class="glass-effect p-8 rounded-2xl">
                        <i class="fas fa-map-marked-alt text-8xl text-white mb-6"></i>
                        <h3 class="text-2xl font-semibold mb-4">Expertise Topographique</h3>
                        <p class="text-blue-100">Plus de 15 ans d'expérience dans la topographie et la cartographie au Mali et en Afrique de l'Ouest</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Nos Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Des prestations topographiques complètes pour tous vos projets d'infrastructure
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Études & Levés</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Levé planimétrique & altimétrique</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>MNT, profils en long & travers</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Récolement et contrôle d'ouvrages</li>
                    </ul>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-drafting-compass text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Implantations & Exécution</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Implantation de routes, VRD</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Ouvrages d'art, bâtiments</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Dossiers d'exécution</li>
                    </ul>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl hover:shadow-xl transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-map text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Cartographie & Cadastre</h3>
                    <ul class="text-gray-600 space-y-2">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Plans cadastraux</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Cartographie numérique</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Géoréférencement</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Équipe Section -->
    <section id="equipe" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Notre Équipe</h2>
                <p class="text-xl text-gray-600">Une équipe expérimentée et qualifiée</p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-tie text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Ingénieurs Topo</h3>
                    <p class="text-gray-600">2 personnes</p>
                    <p class="text-sm text-primary">12 et 05 ans d'expérience</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-cog text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Techniciens Topo</h3>
                    <p class="text-gray-600">2 personnes</p>
                    <p class="text-sm text-primary">4-5 ans d'expérience</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Opérateurs Topo</h3>
                    <p class="text-gray-600">4 personnes</p>
                    <p class="text-sm text-primary">5 ans d'expérience</p>
                </div>
                
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-white text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Main d'œuvre</h3>
                    <p class="text-gray-600">4 personnes</p>
                    <p class="text-sm text-primary">Support terrain</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Devis Section -->
    <section id="devis" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Demander un Devis</h2>
                <p class="text-xl text-gray-600">Obtenez une estimation précise pour votre projet</p>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <form action="process_devis.php" method="POST" class="bg-gray-50 p-8 rounded-2xl" data-aos="fade-up">
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Nom complet *</label>
                            <input type="text" name="nom" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Entreprise</label>
                            <input type="text" name="entreprise" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Téléphone *</label>
                            <input type="tel" name="telephone" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Type de projet *</label>
                        <select name="type_projet" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            <option value="">Sélectionnez un type</option>
                            <option value="route">Route & VRD</option>
                            <option value="ouvrage">Ouvrage d'art</option>
                            <option value="voirie">Voirie urbaine</option>
                            <option value="hydro">Aménagement hydro-agricole</option>
                            <option value="aep">Réseau AEP</option>
                            <option value="btp">Dossier d'exécution BTP</option>
                            <option value="cadastre">Plan cadastral</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Description du projet *</label>
                        <textarea name="description" rows="4" required placeholder="Décrivez votre projet en détail..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Localisation *</label>
                            <input type="text" name="localisation" required placeholder="Ville, région..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Délai souhaité</label>
                            <input type="text" name="delai" placeholder="Ex: 3 mois" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-secondary transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>Envoyer la demande de devis
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section id="newsletter" class="py-20 gradient-bg text-white">
        <div class="container mx-auto px-4 text-center">
            <div data-aos="fade-up">
                <h2 class="text-4xl font-bold mb-4">Restez Informé</h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    Recevez nos dernières actualités, conseils techniques et offres spéciales directement dans votre boîte mail
                </p>
                
                <form action="process_newsletter.php" method="POST" class="max-w-md mx-auto">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <input type="email" name="email" required placeholder="Votre adresse email" 
                               class="flex-1 px-4 py-3 rounded-lg text-gray-800 focus:ring-2 focus:ring-white focus:outline-none">
                        <button type="submit" class="bg-white text-primary px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                            S'abonner
                        </button>
                    </div>
                </form>
                
                <p class="text-sm text-blue-200 mt-4">
                    <i class="fas fa-shield-alt mr-2"></i>Vos données sont protégées et ne seront jamais partagées
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Contactez-nous</h2>
                <p class="text-xl text-gray-600">Nous sommes là pour répondre à toutes vos questions</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <form action="process_contact.php" method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Nom *</label>
                                <input type="text" name="nom" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">Email *</label>
                                <input type="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Sujet *</label>
                            <input type="text" name="sujet" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">Message *</label>
                            <textarea name="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"></textarea>
                        </div>
                        
                        <button type="submit" class="bg-primary text-white px-8 py-3 rounded-lg font-semibold hover:bg-secondary transition-colors">
                            <i class="fas fa-paper-plane mr-2"></i>Envoyer le message
                        </button>
                    </form>
                </div>
                
                <div data-aos="fade-left" class="space-y-8">
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Nos Coordonnées</h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Adresse principale</p>
                                    <p class="text-gray-600">Rue 251 - Porte N°500, Dialakorobougou<br>Route de Moutoungoula, Bamako</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Adresse secondaire</p>
                                    <p class="text-gray-600">Garantiguibougou, 2e Terminus<br>Bamako, Mali</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Téléphone</p>
                                    <p class="text-gray-600">
                                        <a href="tel:+22320207986" class="hover:text-primary">+223 20 20 79 86</a><br>
                                        <a href="tel:+22376628499" class="hover:text-primary">+223 76 62 84 99</a>
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">Email</p>
                                    <p class="text-gray-600">
                                        <a href="mailto:techniquestopomali@gmail.com" class="hover:text-primary">techniquestopomali@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h3 class="text-xl font-semibold mb-4 text-gray-800">Suivez-nous</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center hover:bg-secondary transition-colors">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center hover:bg-secondary transition-colors">
                                <i class="fab fa-linkedin-in text-white"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center hover:bg-secondary transition-colors">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                            <a href="https://wa.me/22376628499" target="_blank" class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center hover:bg-green-600 transition-colors">
                                <i class="fab fa-whatsapp text-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">TECHNIQUES TOPO</h3>
                    <p class="text-gray-300 mb-4">Bureau d'Études Topographiques, Cartographiques & Cadastrales basé à Bamako, Mali.</p>
                    <p class="text-sm text-gray-400">Créé en 2021, nous intervenons dans toute la sous-région ouest-africaine.</p>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white transition-colors">Études topographiques</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Implantations</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cartographie</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Cadastre</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li>📍 Bamako, Mali</li>
                        <li>☎ +223 20 20 79 86</li>
                        <li>✉ techniquestopomali@gmail.com</li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-300 mb-4">Restez informé de nos actualités</p>
                    <form action="process_newsletter.php" method="POST" class="flex">
                        <input type="email" name="email" placeholder="Votre email" class="flex-1 px-3 py-2 rounded-l-lg text-gray-800 focus:outline-none">
                        <button type="submit" class="bg-primary px-3 py-2 rounded-r-lg hover:bg-secondary transition-colors">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">&copy; 2025 TECHNIQUES TOPO. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Form validation and submission feedback
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Envoi en cours...';
                submitBtn.disabled = true;
                
                // Simulate form processing (remove in production)
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i>Envoyé !';
                    submitBtn.classList.add('bg-green-500');
                    
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('bg-green-500');
                        this.reset();
                    }, 2000);
                }, 1500);
            });
        });
    </script>
</body>
</html> 