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

/* page/home.html.twig */
class __TwigTemplate_18172c90663e3bc05b4cddca641cce55a0c43f24db28f058ca4a077531c64569 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/home.html.twig", 1);
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
        echo "<style>
  :root {
  --orange: hsl(26, 92%, 50%);
  --orange-dark: hsl(26, 98%, 41%);
  --dark-dark-blue: hsl(245, 66%, 23%);
}

#title {
  margin: .5rem 0;
  font-size: 4rem;
  text-align: center;
  color: var(--orange);
  font-family: 'Lato', sans-serif;
  text-shadow: 1px 1px 0 var(--dark-dark-blue),
              2px 2px 0 var(--dark-dark-blue),
              3px 3px 0 var(--dark-dark-blue),
              4px 4px 0 var(--dark-dark-blue),
              5px 5px 0 var(--orange-dark),
              6px 6px 0 var(--orange-dark),
              7px 7px 0 var(--orange-dark),
              8px 8px 0 var(--orange-dark),
              9px 9px 0 var(--dark-dark-blue),
              10px 10px 0 var(--dark-dark-blue),
              11px 11px 0 var(--dark-dark-blue);
}

</style>

 <article>
<br><br><br><br>
  <h1 id=\"title\">SONATEL_ACADEMY</h1>
  
</article>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  {% extends 'base.html.twig' %}

{% block body %}
<style>
  :root {
  --orange: hsl(26, 92%, 50%);
  --orange-dark: hsl(26, 98%, 41%);
  --dark-dark-blue: hsl(245, 66%, 23%);
}

#title {
  margin: .5rem 0;
  font-size: 4rem;
  text-align: center;
  color: var(--orange);
  font-family: 'Lato', sans-serif;
  text-shadow: 1px 1px 0 var(--dark-dark-blue),
              2px 2px 0 var(--dark-dark-blue),
              3px 3px 0 var(--dark-dark-blue),
              4px 4px 0 var(--dark-dark-blue),
              5px 5px 0 var(--orange-dark),
              6px 6px 0 var(--orange-dark),
              7px 7px 0 var(--orange-dark),
              8px 8px 0 var(--orange-dark),
              9px 9px 0 var(--dark-dark-blue),
              10px 10px 0 var(--dark-dark-blue),
              11px 11px 0 var(--dark-dark-blue);
}

</style>

 <article>
<br><br><br><br>
  <h1 id=\"title\">SONATEL_ACADEMY</h1>
  
</article>



{% endblock %}
 ", "page/home.html.twig", "/home/adji/projet_symfony/templates/page/home.html.twig");
    }
}
