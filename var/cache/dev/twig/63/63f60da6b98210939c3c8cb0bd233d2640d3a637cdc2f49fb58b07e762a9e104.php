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

/* page/list.html.twig */
class __TwigTemplate_afb6bec3979e4005bff423f747cdd2cff755c2a83eed77ee19cf842d3573df69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<center><h3>Listes des Employés de la SONATEL-ACADEMY</h3></center>
<table  class=\"table\">
  <thead>
  <tr>
      <th scope=\"col\">Matricule</th>
      <th scope=\"col\">Nom_Compet</th>
      <th scope=\"col\">Date-Naissance</th>
      <th scope=\"col\">Salaire</th>
      <th scope=\"col\">Service</th>
      <th scope=\"col\">SUPPRIMER</th>
      <th scope=\"col\">MODIFIER</th>
    </tr>
      </thead>
      <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["employers"]) || array_key_exists("employers", $context) ? $context["employers"] : (function () { throw new RuntimeError('Variable "employers" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employer"]) {
            // line 20
            echo "      <tr>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "matricule", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "nomComplet", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "datenaissance", [], "any", false, false, false, 23), "d/m/y"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "salaire", [], "any", false, false, false, 24), "html", null, true);
            echo "Fcf</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["employer"], "service", [], "any", false, false, false, 25), "libele", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
      <td>
      <button class=\"btn btn-danger\">
      <a href=\"/page/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employer"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "/delete\">SUPPRIMER</a>
      </button>
      </td>
      <td>
      <button class=\"btn btn-primary\">
      <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, $context["employer"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\">MODIFIER</a>
      </button>
      </td>

  </tr>
  
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " 
  
  </tbody>
</table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 39,  121 => 33,  113 => 28,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  91 => 21,  88 => 20,  84 => 19,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends 'base.html.twig' %}
  {# {% form_theme formEmp 'bootstrap_4_layout.html.twig' %} #}

{% block body %}
<center><h3>Listes des Employés de la SONATEL-ACADEMY</h3></center>
<table  class=\"table\">
  <thead>
  <tr>
      <th scope=\"col\">Matricule</th>
      <th scope=\"col\">Nom_Compet</th>
      <th scope=\"col\">Date-Naissance</th>
      <th scope=\"col\">Salaire</th>
      <th scope=\"col\">Service</th>
      <th scope=\"col\">SUPPRIMER</th>
      <th scope=\"col\">MODIFIER</th>
    </tr>
      </thead>
      <tbody>
      {% for employer in employers %}
      <tr>
      <td>{{employer. matricule}}</td>
      <td>{{employer.nomComplet}}</td>
      <td>{{employer.datenaissance | date('d/m/y')}}</td>
      <td>{{employer.salaire}}Fcf</td>
      <td>{{employer.service.libele}}</td>
      <td>
      <button class=\"btn btn-danger\">
      <a href=\"/page/{{employer.id}}/delete\">SUPPRIMER</a>
      </button>
      </td>
      <td>
      <button class=\"btn btn-primary\">
      <a href=\"{{path('edit',{id:employer.id})}}\">MODIFIER</a>
      </button>
      </td>

  </tr>
  
   {% endfor %} 
  
  </tbody>
</table>


{% endblock %}", "page/list.html.twig", "/home/adji/projet_symfony/templates/page/list.html.twig");
    }
}
