# Appliquer un thème Bootstrap à un formulaire Symfony

## 1. Installer Bootstrap dans votre projet
On peux installer Bootstrap via un CDN (méthode la plus simple) sans avoir à l'installer localement
1. - trouver le lien CDN sur : https://getbootstrap.com/
2. - dans my_project_directory 
            └── templates
                └── home_page
                    └── base.html.twig
    - copier le lien de css bootstrap dans le head en dessus des blocs twig stylsheet 
    - copier le script de js boostrap en dessous du bloc twig javascript
3. - Configurer Twig pour utiliser les templates Bootstrap 
        doc symfony theme bootstrap : https://symfony.com/doc/current/form/bootstrap5.html
        doc symfony theme formulaire : https://symfony.com/doc/current/form/form_themes.html
    - Pour appliquer Bootstrap globalement il faut le fichier :
        my_project_directory 
            └── config
                └── packages
                    └── twig.yaml
        `twig:`
            `form_themes: ['bootstrap_5_layout.html.twig']`
            `# ... ( ne pas modifier le reste)`
        On peux passer plusieurs theme avec cette options car parfois les theme de formulaire ne redefinissent que quelques elements, si un thème ne remplace pas un élément, Symfony 

        L'ordre des thèmes dans twig.form_themesoption est important. Chaque thème remplace tous les thèmes précédents, donc mettre les thèmes les plus importants à la fin de la liste.
    - Si on veux l'applique sur un seul formulaire
        my_project_directory
            └── templates
                └── admin
                    └── brand
                        └── form.html.twig
        en tete du fichier :
        {# ce thème de formulaire sera appliqué uniquement au formulaire de ce modèle #}
        {% form_theme form 'foundation_5_layout.html.twig' %}

## 2. Créer un formulaire, Afficher le formulaire dans un template Twig 
    - Voir la doc

## 3. Style supplémentaire pour les boutons et champs de formulaire
    doc bootstrap buttons : https://getbootstrap.com/docs/5.0/components/buttons/
    Rajouter la class indiquer dans la doc
    Exemple dans my_project_directory
                        └── templates   
                            └── admin
                                └── brand
                                    └── index.html.twig
    - <button type="button" class="btn btn-primary">Primary</button>
        - <a href="{{ path('app_admin_brand_edit', {'id': brand.id}) }}">edit</a>
            - <a href="{{ path('app_admin_brand_edit', {'id': brand.id}) }}" class="btn btn-primary">edit</a>
    Le bouton edit a maintenant le style css de la class bootstrap (btn btn-primary)






