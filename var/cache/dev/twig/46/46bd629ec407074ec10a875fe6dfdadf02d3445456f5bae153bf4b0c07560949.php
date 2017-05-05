<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38d08e54e5fb6173f9efa1f0027413c7b5df9b9712a50a2f71cbf8ce7eba477f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38d08e54e5fb6173f9efa1f0027413c7b5df9b9712a50a2f71cbf8ce7eba477f->enter($__internal_38d08e54e5fb6173f9efa1f0027413c7b5df9b9712a50a2f71cbf8ce7eba477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2f6d7231c8b05d512b00fc4bfaf057a4ff9a59cae29ac5f9e0a682b9fd077589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6d7231c8b05d512b00fc4bfaf057a4ff9a59cae29ac5f9e0a682b9fd077589->enter($__internal_2f6d7231c8b05d512b00fc4bfaf057a4ff9a59cae29ac5f9e0a682b9fd077589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "</body>
</html>
";
        
        $__internal_38d08e54e5fb6173f9efa1f0027413c7b5df9b9712a50a2f71cbf8ce7eba477f->leave($__internal_38d08e54e5fb6173f9efa1f0027413c7b5df9b9712a50a2f71cbf8ce7eba477f_prof);

        
        $__internal_2f6d7231c8b05d512b00fc4bfaf057a4ff9a59cae29ac5f9e0a682b9fd077589->leave($__internal_2f6d7231c8b05d512b00fc4bfaf057a4ff9a59cae29ac5f9e0a682b9fd077589_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cb74cd2f14659b4c607fa33b047142d21d662f55169fa1342cfc2c8e685c284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb74cd2f14659b4c607fa33b047142d21d662f55169fa1342cfc2c8e685c284->enter($__internal_1cb74cd2f14659b4c607fa33b047142d21d662f55169fa1342cfc2c8e685c284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76b818e8934ad0011312ea1a14b31e8d2ba50888d1e1922bb95b83c45c056f6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76b818e8934ad0011312ea1a14b31e8d2ba50888d1e1922bb95b83c45c056f6b->enter($__internal_76b818e8934ad0011312ea1a14b31e8d2ba50888d1e1922bb95b83c45c056f6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_76b818e8934ad0011312ea1a14b31e8d2ba50888d1e1922bb95b83c45c056f6b->leave($__internal_76b818e8934ad0011312ea1a14b31e8d2ba50888d1e1922bb95b83c45c056f6b_prof);

        
        $__internal_1cb74cd2f14659b4c607fa33b047142d21d662f55169fa1342cfc2c8e685c284->leave($__internal_1cb74cd2f14659b4c607fa33b047142d21d662f55169fa1342cfc2c8e685c284_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8bf7c83ddcc669490d2c7d68191b259f7cb6ede58160f416e8efc01f1e50333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bf7c83ddcc669490d2c7d68191b259f7cb6ede58160f416e8efc01f1e50333->enter($__internal_f8bf7c83ddcc669490d2c7d68191b259f7cb6ede58160f416e8efc01f1e50333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5cf2dd5159b4c1eeff7a0cdbd5993808eecd4a1467d881d2b6ba9387422f78a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf2dd5159b4c1eeff7a0cdbd5993808eecd4a1467d881d2b6ba9387422f78a6->enter($__internal_5cf2dd5159b4c1eeff7a0cdbd5993808eecd4a1467d881d2b6ba9387422f78a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5cf2dd5159b4c1eeff7a0cdbd5993808eecd4a1467d881d2b6ba9387422f78a6->leave($__internal_5cf2dd5159b4c1eeff7a0cdbd5993808eecd4a1467d881d2b6ba9387422f78a6_prof);

        
        $__internal_f8bf7c83ddcc669490d2c7d68191b259f7cb6ede58160f416e8efc01f1e50333->leave($__internal_f8bf7c83ddcc669490d2c7d68191b259f7cb6ede58160f416e8efc01f1e50333_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_516902c6931e5cbbd764b9d1fb64582f65dd4f8b82526cdc14223a5eb414ded6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516902c6931e5cbbd764b9d1fb64582f65dd4f8b82526cdc14223a5eb414ded6->enter($__internal_516902c6931e5cbbd764b9d1fb64582f65dd4f8b82526cdc14223a5eb414ded6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd56ae28377bf78a137cf352a7d56a797af65b361f34a52097f09efab934908a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd56ae28377bf78a137cf352a7d56a797af65b361f34a52097f09efab934908a->enter($__internal_cd56ae28377bf78a137cf352a7d56a797af65b361f34a52097f09efab934908a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd56ae28377bf78a137cf352a7d56a797af65b361f34a52097f09efab934908a->leave($__internal_cd56ae28377bf78a137cf352a7d56a797af65b361f34a52097f09efab934908a_prof);

        
        $__internal_516902c6931e5cbbd764b9d1fb64582f65dd4f8b82526cdc14223a5eb414ded6->leave($__internal_516902c6931e5cbbd764b9d1fb64582f65dd4f8b82526cdc14223a5eb414ded6_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7628c805db670dfe7c7866416b0649fdd45f22dffd473cc2cf68c6105773198a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7628c805db670dfe7c7866416b0649fdd45f22dffd473cc2cf68c6105773198a->enter($__internal_7628c805db670dfe7c7866416b0649fdd45f22dffd473cc2cf68c6105773198a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d09045e8ec6c2a2ea61be6f4a6bb694baa923812be5104ebe53152a0bcf9d98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09045e8ec6c2a2ea61be6f4a6bb694baa923812be5104ebe53152a0bcf9d98e->enter($__internal_d09045e8ec6c2a2ea61be6f4a6bb694baa923812be5104ebe53152a0bcf9d98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d09045e8ec6c2a2ea61be6f4a6bb694baa923812be5104ebe53152a0bcf9d98e->leave($__internal_d09045e8ec6c2a2ea61be6f4a6bb694baa923812be5104ebe53152a0bcf9d98e_prof);

        
        $__internal_7628c805db670dfe7c7866416b0649fdd45f22dffd473cc2cf68c6105773198a->leave($__internal_7628c805db670dfe7c7866416b0649fdd45f22dffd473cc2cf68c6105773198a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 12,  101 => 11,  84 => 6,  66 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/app/Resources/views/base.html.twig");
    }
}
