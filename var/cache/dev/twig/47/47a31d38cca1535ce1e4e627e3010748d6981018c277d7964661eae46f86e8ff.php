<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/show.html.twig */
class __TwigTemplate_f62d5aa655191a1cfc94bde2a4cc2ec617b04589dfdc7d23d9cdc73f38eb37ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
   <article>
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        <div class=\"metadata\">Ecrit le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "createdAt", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "createdAt", [], "any", false, false, false, 8), "H:i"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "createdBy", [], "any", false, false, false, 8), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
        <div class=\"content\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\">
            <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
        </div>
    </article>




<section class=\"articles\">
    <div class=\"row\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "url", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 21
            echo "            <div class=\"col-2_4\">
                <p><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "url", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"\" style=\"width: 300px; height:auto\"></p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AnI7qGQs0Ic\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

    </div>
</section>










    <section id=\"commentaires\">

        <h1>";
        // line 41
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 41, $this->source); })()), "comments", [], "any", false, false, false, 41)), "html", null, true);
        echo " commentaires :</h1>




<!-- Nouvelle partie ajoutée pour la pagination des commentaires -->
                
                     <h1> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 48, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 48), "html", null, true);
        echo " commentaires :</h1>
              
                    
                        ";
        // line 52
        echo "                        <!--th>";
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 52, $this->source); })()), "Id", "a.id");
        echo "</th>
                        <th";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 53, $this->source); })()), "isSorted", [0 => "a.Title"], "method", false, false, false, 53)) {
            echo " class=\"sorted\"";
        }
        echo ">
                            ";
        // line 54
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 54, $this->source); })()), "Title", "a.title");
        echo "
                        </th>
                        <th";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 56, $this->source); })()), "isSorted", [0 => [0 => "a.date", 1 => "a.time"]], "method", false, false, false, 56)) {
            echo " class=\"sorted\"";
        }
        echo ">
                            ";
        // line 57
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 57, $this->source); })()), "Release", [0 => "a.date", 1 => "a.time"]);
        echo "
                        </th>
                    </tr-->
                    ";
        // line 61
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 62
            echo "
                    <br><div class=\"comment\">
                            <div class=\"row\">
                                <div class=\"col-4\"> 
                                    <img src=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 66), "image", [], "any", false, false, false, 66), "html", null, true);
            echo "\" alt=\"\" style=\"width:50px; height:auto\">
                                    ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["com"], "user", [], "any", false, false, false, 67), "username", [], "any", false, false, false, 67), "html", null, true);
            echo " (<small> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "createdAt", [], "any", false, false, false, 67), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)
                                </div>
                                <div class=\"col-8\">
                                ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["com"], "content", [], "any", false, false, false, 70), "html", null, true);
            echo "

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                  
        ";
        // line 78
        echo "        <div class=\"navigation\">
            ";
        // line 79
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 79, $this->source); })()));
        echo "
        </div>

    







        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 90, $this->source); })()), "comments", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 91
            echo "
        <br><div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-4\"> 
                    <img src=\"";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 95), "image", [], "any", false, false, false, 95), "html", null, true);
            echo "\" alt=\"\" style=\"width:50px; height:auto\">
      
                        ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 97), "username", [], "any", false, false, false, 97), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 97), "d/m/Y à H:i"), "html", null, true);
            echo " </small>)
                </div>
                <div class=\"col-8\">
                    ";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 100);
            echo "
                    
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
        ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) {
            // line 108
            echo "
        ";
            // line 109
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 109, $this->source); })()), 'form_start');
            echo "
        ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), 'row');
            echo "
        ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 111, $this->source); })()), "content", [], "any", false, false, false, 111), 'row', ["attr" => ["placeholder" => "Votre commentaire"]]);
            echo "

        <button type=\"submit\" class=\"btn btn-success\">Commenter</button>

        ";
            // line 115
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 115, $this->source); })()), 'form_end');
            echo "

        ";
        } else {
            // line 118
            echo "
            <h2>Vous ne pouvez pas commenter si vous n'etes pas connecté</h2>
            <a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connexion</a>
        ";
        }
        // line 122
        echo "
    </section>

    

</div>












";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 122,  305 => 120,  301 => 118,  295 => 115,  288 => 111,  284 => 110,  280 => 109,  277 => 108,  275 => 107,  272 => 106,  260 => 100,  252 => 97,  247 => 95,  241 => 91,  237 => 90,  223 => 79,  220 => 78,  217 => 76,  205 => 70,  197 => 67,  193 => 66,  187 => 62,  182 => 61,  176 => 57,  170 => 56,  165 => 54,  159 => 53,  154 => 52,  148 => 48,  138 => 41,  120 => 25,  111 => 22,  108 => 21,  104 => 20,  92 => 11,  88 => 10,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">
   <article>
        <h2>{{ article.title }}</h2>
        <div class=\"metadata\">Ecrit le {{ article.createdAt | date('d/m/Y')}} à {{ article.createdAt | date('H:i')}} par {{ article.createdBy }} dans la catégorie {{ article.category.title }}</div>
        <div class=\"content\">
            <img src=\"{{ article.image }}\" alt=\"\">
            <p>{{ article.content }}</p>
        </div>
    </article>




<section class=\"articles\">
    <div class=\"row\">
        {% for photo in article.url %}
            <div class=\"col-2_4\">
                <p><img src=\"{{ photo.url }}\" alt=\"\" style=\"width: 300px; height:auto\"></p>
            </div>
        {% endfor %}
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AnI7qGQs0Ic\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>

    </div>
</section>










    <section id=\"commentaires\">

        <h1>{{ article.comments | length }} commentaires :</h1>




<!-- Nouvelle partie ajoutée pour la pagination des commentaires -->
                
                     <h1> {{ comment.getTotalItemCount }} commentaires :</h1>
              
                    
                        {# sorting of properties based on query components #}
                        <!--th>{{ knp_pagination_sortable(comment, 'Id', 'a.id') }}</th>
                        <th{% if comment.isSorted('a.Title') %} class=\"sorted\"{% endif %}>
                            {{ knp_pagination_sortable(comment, 'Title', 'a.title') }}
                        </th>
                        <th{% if comment.isSorted(['a.date', 'a.time']) %} class=\"sorted\"{% endif %}>
                            {{ knp_pagination_sortable(comment, 'Release', ['a.date', 'a.time']) }}
                        </th>
                    </tr-->
                    {# table body #}
                    {% for com in comment %}

                    <br><div class=\"comment\">
                            <div class=\"row\">
                                <div class=\"col-4\"> 
                                    <img src=\"{{ com.user.image }}\" alt=\"\" style=\"width:50px; height:auto\">
                                    {{ com.user.username }} (<small> {{ com.createdAt | date('d/m/Y à H:i') }}</small>)
                                </div>
                                <div class=\"col-8\">
                                {{ com.content }}

                                </div>
                            </div>
                        </div>
                    {% endfor %}
                  
        {# display navigation #}
        <div class=\"navigation\">
            {{ knp_pagination_render(comment) }}
        </div>

    







        {% for comment in article.comments %}

        <br><div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-4\"> 
                    <img src=\"{{ comment.user.image }}\" alt=\"\" style=\"width:50px; height:auto\">
      
                        {{ comment.user.username }} (<small>{{ comment.createdAt | date('d/m/Y à H:i') }} </small>)
                </div>
                <div class=\"col-8\">
                    {{ comment.content | raw }}
                    
                </div>
            </div>
        </div>
        {% endfor %}

        {% if app.user %}

        {{ form_start(commentForm) }}
        {{ form_row(commentForm.user ) }}
        {{ form_row(commentForm.content, {'attr': {'placeholder': \"Votre commentaire\"}})}}

        <button type=\"submit\" class=\"btn btn-success\">Commenter</button>

        {{ form_end(commentForm)}}

        {% else %}

            <h2>Vous ne pouvez pas commenter si vous n'etes pas connecté</h2>
            <a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">Connexion</a>
        {% endif %}

    </section>

    

</div>












{% endblock %}", "blog/show.html.twig", "C:\\Users\\Joris\\Documents\\Projet6\\templates\\blog\\show.html.twig");
    }
}
