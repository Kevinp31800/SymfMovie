<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98e11ce426651e38779a54537bbd944936f328015a7f73566f6c22ca4b024e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e11ce426651e38779a54537bbd944936f328015a7f73566f6c22ca4b024e80->enter($__internal_98e11ce426651e38779a54537bbd944936f328015a7f73566f6c22ca4b024e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d69f09d7f7a8c18000782642bdb24741958d88e94b28efcd58aad9b71c0f4433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69f09d7f7a8c18000782642bdb24741958d88e94b28efcd58aad9b71c0f4433->enter($__internal_d69f09d7f7a8c18000782642bdb24741958d88e94b28efcd58aad9b71c0f4433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e11ce426651e38779a54537bbd944936f328015a7f73566f6c22ca4b024e80->leave($__internal_98e11ce426651e38779a54537bbd944936f328015a7f73566f6c22ca4b024e80_prof);

        
        $__internal_d69f09d7f7a8c18000782642bdb24741958d88e94b28efcd58aad9b71c0f4433->leave($__internal_d69f09d7f7a8c18000782642bdb24741958d88e94b28efcd58aad9b71c0f4433_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4efb0a93c4f43a366891ad74f610069443594185f1fca3b49b07d2f522d07e85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efb0a93c4f43a366891ad74f610069443594185f1fca3b49b07d2f522d07e85->enter($__internal_4efb0a93c4f43a366891ad74f610069443594185f1fca3b49b07d2f522d07e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72935e571f4202cf565a39e5c4c9842cfcff728c6331580788c2ec4e28d6ebc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72935e571f4202cf565a39e5c4c9842cfcff728c6331580788c2ec4e28d6ebc2->enter($__internal_72935e571f4202cf565a39e5c4c9842cfcff728c6331580788c2ec4e28d6ebc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_72935e571f4202cf565a39e5c4c9842cfcff728c6331580788c2ec4e28d6ebc2->leave($__internal_72935e571f4202cf565a39e5c4c9842cfcff728c6331580788c2ec4e28d6ebc2_prof);

        
        $__internal_4efb0a93c4f43a366891ad74f610069443594185f1fca3b49b07d2f522d07e85->leave($__internal_4efb0a93c4f43a366891ad74f610069443594185f1fca3b49b07d2f522d07e85_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_08f50b94a9a75305f6096252df6abdc526eb928ec38d9bc8cb0c6dacf48d6b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f50b94a9a75305f6096252df6abdc526eb928ec38d9bc8cb0c6dacf48d6b75->enter($__internal_08f50b94a9a75305f6096252df6abdc526eb928ec38d9bc8cb0c6dacf48d6b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a826dc3dbae63edb4f94341c7e87e69742e53191b869b85fc683225b36956ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a826dc3dbae63edb4f94341c7e87e69742e53191b869b85fc683225b36956ee6->enter($__internal_a826dc3dbae63edb4f94341c7e87e69742e53191b869b85fc683225b36956ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a826dc3dbae63edb4f94341c7e87e69742e53191b869b85fc683225b36956ee6->leave($__internal_a826dc3dbae63edb4f94341c7e87e69742e53191b869b85fc683225b36956ee6_prof);

        
        $__internal_08f50b94a9a75305f6096252df6abdc526eb928ec38d9bc8cb0c6dacf48d6b75->leave($__internal_08f50b94a9a75305f6096252df6abdc526eb928ec38d9bc8cb0c6dacf48d6b75_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_46f77a0c77f20dc1b36ffc3b4bd47e846180e5e4206208a5e3eb943e661fc9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f77a0c77f20dc1b36ffc3b4bd47e846180e5e4206208a5e3eb943e661fc9c2->enter($__internal_46f77a0c77f20dc1b36ffc3b4bd47e846180e5e4206208a5e3eb943e661fc9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91a049490e1a1ea6685e47d9f63193b7c5dedf05a92cde53ddf1b406868b7cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a049490e1a1ea6685e47d9f63193b7c5dedf05a92cde53ddf1b406868b7cd5->enter($__internal_91a049490e1a1ea6685e47d9f63193b7c5dedf05a92cde53ddf1b406868b7cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_91a049490e1a1ea6685e47d9f63193b7c5dedf05a92cde53ddf1b406868b7cd5->leave($__internal_91a049490e1a1ea6685e47d9f63193b7c5dedf05a92cde53ddf1b406868b7cd5_prof);

        
        $__internal_46f77a0c77f20dc1b36ffc3b4bd47e846180e5e4206208a5e3eb943e661fc9c2->leave($__internal_46f77a0c77f20dc1b36ffc3b4bd47e846180e5e4206208a5e3eb943e661fc9c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/jerome/Documents/01_Simplon/Git/SymfMovie/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
