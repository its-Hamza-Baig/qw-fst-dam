<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/tab-home.html.twig */
class __TwigTemplate_4455c6971fc8aff5e4f1b6e76b5990c1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-home.html.twig"));

        // line 1
        yield "
\t<!-- Home Tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-16 2xl-max:px-10 xl-max:pl-6 xl-max:pr-6 md-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" data-tab=\"home\" aria-label=\"home\">
\t\t<div
\t\t\tclass=\"content-area pb-6 pt-4 h-full desktop-margin md-max:pl-0 md-max:pr-6\" id=\"content-area\">
\t\t\t<!-- hero -->
\t\t\t<div class=\"flex flex-row justify-between xl-max:flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-0 py-14\">
\t\t\t\t<div class=\"hero-left text-basic-blue\">
\t\t\t\t\t<span class=\"text-[32px] font-semibold\">Welcome!</span>
\t\t\t\t\t<h2 class=\"text-6xl font-black mb-4 md-max:text-4xl\">
\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t</h2>
\t\t\t\t\t<h3 class=\"text-black font-semibold text-lg flex gap-4 xl-max:hidden\">
\t\t\t\t\t\tUse the search bar to find the asset you are looking for!
\t\t\t\t\t\t<img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/arrow.png"), "html", null, true);
        yield "\" alt=\"\"/>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"hero-right grid grid-flow-col grid-cols-3 md-max:grid-flow-dense md-max:grid-cols-2 gap-6\">
\t\t\t\t\t<a class=\"box uppercase flex flex-col text-center items-center font-black text-lg md-max:text-base bg-white pt-10 pb-4 w-full rounded-xl shadow-lg\" href=\"?tab=assets\">
\t\t\t\t\t\t<img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/assets-blue.svg"), "html", null, true);
        yield "\" alt=\"Assets\">
\t\t\t\t\t\tAll assets
\t\t\t\t\t\t<div class=\"count text-sm text-accent-blue\">[12.345]</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"box uppercase flex flex-col items-center text-center font-black text-lg md-max:text-base bg-white pt-10 w-full pb-4 px-10 rounded-xl shadow-lg\" href=\"?tab=packages\">
\t\t\t\t\t\t<img src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/packages-blue.svg"), "html", null, true);
        yield "\" alt=\"Packages\">

\t\t\t\t\t\tAll Packages
\t\t\t\t\t\t<div class=\"count text-sm text-accent-blue\">[12.345]</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"box uppercase flex flex-col items-center text-center font-black text-lg md-max:text-base bg-white pt-10 pb-4 w-full rounded-xl shadow-lg\" href=\"?tab=collections\">
\t\t\t\t\t\t<img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/collections-blue.svg"), "html", null, true);
        yield "\" alt=\"Collections\">

\t\t\t\t\t\tMy Collections
\t\t\t\t\t\t<div class=\"count text-sm text-accent-blue\">[12.345]</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- search -->
\t\t\t<h3 class=\"text-black font-semibold text-lg gap-4 hidden xl-max:flex mb-6\">
\t\t\t\tUse the search bar to find the asset you are looking for!
\t\t\t\t<img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/arrow.png"), "html", null, true);
        yield "\" alt=\"\"/>
\t\t\t</h3>
\t\t\t<div class=\"relative max-w-[65%] xl-max:max-w-full w-full\">
\t\t\t\t<input id=\"search-input\" type=\"text\" placeholder=\"Enter search item\" class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\" aria-label=\"Search input field\"/>
\t\t\t\t<span id=\"clear-btn\" class=\"clear-btn\"><img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/cancel.png"), "html", null, true);
        yield "\" alt=\"\"/></span>
\t\t\t\t<div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
\t\t\t\t\t<img class=\"h-6 w-6\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/search-blue.svg"), "html", null, true);
        yield "\" alt=\"Search\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- search and card -->
\t\t\t<div class=\"flex gap-8 w-full xl-max:flex-wrap\">
\t\t\t\t<div class=\"w-full max-w-[66%] md-max:flex-col xl-max:max-w-full flex gap-8\" id=\"card-area\">
\t\t\t\t\t<div class=\"w-1/2 md-max:w-full flex-1 mt-16 md-max:mt-6\">
\t\t\t\t\t\t<div class=\"text-basic-blue text-[22px] font-semibold mb-[18px]\">
\t\t\t\t\t\t\tHighlight package
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card rounded-xl overflow-hidden shadow-lg\">
\t\t\t\t\t\t\t<div class=\"relative group\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/3.png"), "html", null, true);
        yield "\" alt=\"\" class=\"max-h-[209px] w-full h-full object-cover\"/>
\t\t\t\t\t\t\t\t<a class=\"show absolute inset-0 z-10 flex items-center font-black justify-center text-white uppercase bg-black/50 opacity-0 visibility-hidden transition-all duration-500 group-hover:opacity-100 group-hover:visibility-visible group-hover:bg-[#004388b3] group-hover:text-xl group-hover:pt-[100px]\" href=\"\">
\t\t\t\t\t\t\t\t\tshow package
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-area font-black px-5 pb-6 relative -mt-[54px] pt-16\">
\t\t\t\t\t\t\t\t<h2 class=\"text-[26px] md-max:text-xl pt-2\">
\t\t\t\t\t\t\t\t\tName of the Package
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"text-lg text-accent-blue\">
\t\t\t\t\t\t\t\t\t[12 Assets]
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"w-1/2 md-max:w-full flex-1 mt-16 md-max:mt-6\">
\t\t\t\t\t\t<div class=\"text-basic-blue text-[22px] font-semibold mb-[18px]\">
\t\t\t\t\t\t\tLatest package
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card rounded-xl overflow-hidden shadow-lg\">
\t\t\t\t\t\t\t<div class=\"relative group\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"max-h-[209px] w-full object-cover\"/>
\t\t\t\t\t\t\t\t<a class=\"show absolute inset-0 z-10 flex items-center font-black justify-center text-white uppercase bg-black/50 opacity-0 visibility-hidden transition-all duration-500 group-hover:opacity-100 group-hover:visibility-visible group-hover:bg-[#004388b3] group-hover:text-xl group-hover:pt-[100px]\" href=\"\">
\t\t\t\t\t\t\t\t\tshow package
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-area font-black px-5 pb-6 relative -mt-[54px] pt-16\">
\t\t\t\t\t\t\t\t<h2 class=\"text-[26px] md-max:text-xl pt-2\">
\t\t\t\t\t\t\t\t\tName of the Package
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"text-lg text-accent-blue\">
\t\t\t\t\t\t\t\t\t[12 Assets]
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"w-full max-w-[66%] block xl-max:max-w-full px-4 pb-6 border border-[#BFD2E0] mt-3 rounded-xl bg-white shadow-md\" id=\"search-area\">
\t\t\t\t\t<div class=\"results\" class=\"max-h-[210px] overflow-y-auto w-full flex flex-col\">
\t\t\t\t\t\t<div class=\"font-semibold text-xl py-6 text-basic-blue\">
\t\t\t\t\t\t\tResults in Assets (266)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col max-h-[210px] overflow-y-auto\">
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"results\" class=\"max-h-[210px] overflow-y-auto w-full flex flex-col\">
\t\t\t\t\t\t<div class=\"font-semibold text-xl py-6 text-basic-blue\">
\t\t\t\t\t\t\tResults in Packages (21)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col max-h-[210px] overflow-y-auto\">
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px]\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[21 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[8 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] p-[10px]\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/search.png"), "html", null, true);
        yield "\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[56 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"results\" class=\"max-h-[210px] overflow-y-auto w-full flex flex-col\">
\t\t\t\t\t\t<div class=\"font-semibold text-xl py-6 text-basic-blue\">
\t\t\t\t\t\t\tResults in Tags (2)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col max-h-[210px] overflow-y-auto\">
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] py-4\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold bg-[#9CD2F0] py-1 px-3.5 rounded-[4px]\">
\t\t\t\t\t\t\t\t\t\tFreudenberg-Beispiel-Tag-01
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[21 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] py-4\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold bg-[#9CD2F0] py-1 px-3.5 rounded-[4px]\">
\t\t\t\t\t\t\t\t\t\tFreudenberg-Beispiel-Tag-02
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[21 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"w-full mt-16 max-w-[33%] xl-max:max-w-[50%] xl-max:mt-4 full-width\">
\t\t\t\t\t<div class=\"text-transparent text-[22px] font-semibold mb-[18px] xl-max:hidden\">
\t\t\t\t\t\t.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-[#F2F5F9] font-semibold w-full max-w-[442px] md-max:max-w-full flex flex-col p-6 tex-base rounded-xl h-full max-h-[320px]\">
\t\t\t\t\t\t<span class=\"border border-l-0 border-r-0 border-[#BFD2E0] py-4\">Lorem ipsum dolor
\t\t\t\t\t\t\t<a href=\"#\" class=\"underline\">amet Link</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"border-[#BFD2E0] py-4\">Lorem ipsum dolor
\t\t\t\t\t\t\t<a href=\"#\" class=\"underline\">amet Link</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"border border-l-0 border-r-0 border-[#BFD2E0] py-4\">Lorem ipsum dolor
\t\t\t\t\t\t\t<a href=\"#\" class=\"underline\">amet Link</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"flex justify-end items-center text-accent-blue text-[26px] font-black gap-1 mt-11\">
\t\t\t\t\t\t\t<img src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/bell.png"), "html", null, true);
        yield "\" class=\"w-[26px] h-[23px] object-contain -mt-1\" alt=\"\"/>
\t\t\t\t\t\t\tNotifications
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Home Tab end -->

\t  ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tab-home.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  308 => 209,  258 => 162,  247 => 154,  236 => 146,  217 => 130,  206 => 122,  195 => 114,  184 => 106,  155 => 80,  131 => 59,  116 => 47,  111 => 45,  104 => 41,  91 => 31,  82 => 25,  74 => 20,  66 => 15,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
\t<!-- Home Tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-16 2xl-max:px-10 xl-max:pl-6 xl-max:pr-6 md-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" data-tab=\"home\" aria-label=\"home\">
\t\t<div
\t\t\tclass=\"content-area pb-6 pt-4 h-full desktop-margin md-max:pl-0 md-max:pr-6\" id=\"content-area\">
\t\t\t<!-- hero -->
\t\t\t<div class=\"flex flex-row justify-between xl-max:flex-wrap gap-7 transition-all duration-1000 w-full md-max:pr-0 py-14\">
\t\t\t\t<div class=\"hero-left text-basic-blue\">
\t\t\t\t\t<span class=\"text-[32px] font-semibold\">Welcome!</span>
\t\t\t\t\t<h2 class=\"text-6xl font-black mb-4 md-max:text-4xl\">
\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t</h2>
\t\t\t\t\t<h3 class=\"text-black font-semibold text-lg flex gap-4 xl-max:hidden\">
\t\t\t\t\t\tUse the search bar to find the asset you are looking for!
\t\t\t\t\t\t<img src=\"{{ asset('build/images/arrow.png') }}\" alt=\"\"/>
\t\t\t\t\t</h3>
\t\t\t\t</div>
\t\t\t\t<div class=\"hero-right grid grid-flow-col grid-cols-3 md-max:grid-flow-dense md-max:grid-cols-2 gap-6\">
\t\t\t\t\t<a class=\"box uppercase flex flex-col text-center items-center font-black text-lg md-max:text-base bg-white pt-10 pb-4 w-full rounded-xl shadow-lg\" href=\"?tab=assets\">
\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/assets-blue.svg') }}\" alt=\"Assets\">
\t\t\t\t\t\tAll assets
\t\t\t\t\t\t<div class=\"count text-sm text-accent-blue\">[12.345]</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"box uppercase flex flex-col items-center text-center font-black text-lg md-max:text-base bg-white pt-10 w-full pb-4 px-10 rounded-xl shadow-lg\" href=\"?tab=packages\">
\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/packages-blue.svg') }}\" alt=\"Packages\">

\t\t\t\t\t\tAll Packages
\t\t\t\t\t\t<div class=\"count text-sm text-accent-blue\">[12.345]</div>
\t\t\t\t\t</a>
\t\t\t\t\t<a class=\"box uppercase flex flex-col items-center text-center font-black text-lg md-max:text-base bg-white pt-10 pb-4 w-full rounded-xl shadow-lg\" href=\"?tab=collections\">
\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/collections-blue.svg') }}\" alt=\"Collections\">

\t\t\t\t\t\tMy Collections
\t\t\t\t\t\t<div class=\"count text-sm text-accent-blue\">[12.345]</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- search -->
\t\t\t<h3 class=\"text-black font-semibold text-lg gap-4 hidden xl-max:flex mb-6\">
\t\t\t\tUse the search bar to find the asset you are looking for!
\t\t\t\t<img src=\"{{ asset('build/images/arrow.png') }}\" alt=\"\"/>
\t\t\t</h3>
\t\t\t<div class=\"relative max-w-[65%] xl-max:max-w-full w-full\">
\t\t\t\t<input id=\"search-input\" type=\"text\" placeholder=\"Enter search item\" class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\" aria-label=\"Search input field\"/>
\t\t\t\t<span id=\"clear-btn\" class=\"clear-btn\"><img src=\"{{ asset('build/images/cancel.png') }}\" alt=\"\"/></span>
\t\t\t\t<div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
\t\t\t\t\t<img class=\"h-6 w-6\" src=\"{{ asset('build/images/svg/search-blue.svg') }}\" alt=\"Search\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- search and card -->
\t\t\t<div class=\"flex gap-8 w-full xl-max:flex-wrap\">
\t\t\t\t<div class=\"w-full max-w-[66%] md-max:flex-col xl-max:max-w-full flex gap-8\" id=\"card-area\">
\t\t\t\t\t<div class=\"w-1/2 md-max:w-full flex-1 mt-16 md-max:mt-6\">
\t\t\t\t\t\t<div class=\"text-basic-blue text-[22px] font-semibold mb-[18px]\">
\t\t\t\t\t\t\tHighlight package
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card rounded-xl overflow-hidden shadow-lg\">
\t\t\t\t\t\t\t<div class=\"relative group\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/3.png') }}\" alt=\"\" class=\"max-h-[209px] w-full h-full object-cover\"/>
\t\t\t\t\t\t\t\t<a class=\"show absolute inset-0 z-10 flex items-center font-black justify-center text-white uppercase bg-black/50 opacity-0 visibility-hidden transition-all duration-500 group-hover:opacity-100 group-hover:visibility-visible group-hover:bg-[#004388b3] group-hover:text-xl group-hover:pt-[100px]\" href=\"\">
\t\t\t\t\t\t\t\t\tshow package
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-area font-black px-5 pb-6 relative -mt-[54px] pt-16\">
\t\t\t\t\t\t\t\t<h2 class=\"text-[26px] md-max:text-xl pt-2\">
\t\t\t\t\t\t\t\t\tName of the Package
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"text-lg text-accent-blue\">
\t\t\t\t\t\t\t\t\t[12 Assets]
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"w-1/2 md-max:w-full flex-1 mt-16 md-max:mt-6\">
\t\t\t\t\t\t<div class=\"text-basic-blue text-[22px] font-semibold mb-[18px]\">
\t\t\t\t\t\t\tLatest package
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card rounded-xl overflow-hidden shadow-lg\">
\t\t\t\t\t\t\t<div class=\"relative group\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/2.png') }}\" alt=\"\" class=\"max-h-[209px] w-full object-cover\"/>
\t\t\t\t\t\t\t\t<a class=\"show absolute inset-0 z-10 flex items-center font-black justify-center text-white uppercase bg-black/50 opacity-0 visibility-hidden transition-all duration-500 group-hover:opacity-100 group-hover:visibility-visible group-hover:bg-[#004388b3] group-hover:text-xl group-hover:pt-[100px]\" href=\"\">
\t\t\t\t\t\t\t\t\tshow package
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-area font-black px-5 pb-6 relative -mt-[54px] pt-16\">
\t\t\t\t\t\t\t\t<h2 class=\"text-[26px] md-max:text-xl pt-2\">
\t\t\t\t\t\t\t\t\tName of the Package
\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t<div class=\"text-lg text-accent-blue\">
\t\t\t\t\t\t\t\t\t[12 Assets]
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"w-full max-w-[66%] block xl-max:max-w-full px-4 pb-6 border border-[#BFD2E0] mt-3 rounded-xl bg-white shadow-md\" id=\"search-area\">
\t\t\t\t\t<div class=\"results\" class=\"max-h-[210px] overflow-y-auto w-full flex flex-col\">
\t\t\t\t\t\t<div class=\"font-semibold text-xl py-6 text-basic-blue\">
\t\t\t\t\t\t\tResults in Assets (266)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col max-h-[210px] overflow-y-auto\">
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black\">JPG</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"results\" class=\"max-h-[210px] overflow-y-auto w-full flex flex-col\">
\t\t\t\t\t\t<div class=\"font-semibold text-xl py-6 text-basic-blue\">
\t\t\t\t\t\t\tResults in Packages (21)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col max-h-[210px] overflow-y-auto\">
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px]\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[21 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] p-[10px] last:border-t-0\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[8 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] p-[10px]\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/search.png') }}\" class=\"h-12 w-12 object-cover openShareModal\" alt=\"\"/>Hier steht als Beispiel der sehr lange
\t\t\t\t\t\t\t\t\t\t                              Freudenberg Dateiname</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[56 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"results\" class=\"max-h-[210px] overflow-y-auto w-full flex flex-col\">
\t\t\t\t\t\t<div class=\"font-semibold text-xl py-6 text-basic-blue\">
\t\t\t\t\t\t\tResults in Tags (2)
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col max-h-[210px] overflow-y-auto\">
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-b-0 border-[#BFD2E0] py-4\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold bg-[#9CD2F0] py-1 px-3.5 rounded-[4px]\">
\t\t\t\t\t\t\t\t\t\tFreudenberg-Beispiel-Tag-01
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[21 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"border border-l-0 border-r-0 border-[#BFD2E0] py-4\">
\t\t\t\t\t\t\t\t<div class=\"flex justify-between items-center\">
\t\t\t\t\t\t\t\t\t<span class=\"flex gap-7 items-center text-base font-semibold bg-[#9CD2F0] py-1 px-3.5 rounded-[4px]\">
\t\t\t\t\t\t\t\t\t\tFreudenberg-Beispiel-Tag-02
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span class=\"font-black text-accent-blue text-sm\">[21 ASSETS]</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"w-full mt-16 max-w-[33%] xl-max:max-w-[50%] xl-max:mt-4 full-width\">
\t\t\t\t\t<div class=\"text-transparent text-[22px] font-semibold mb-[18px] xl-max:hidden\">
\t\t\t\t\t\t.
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-[#F2F5F9] font-semibold w-full max-w-[442px] md-max:max-w-full flex flex-col p-6 tex-base rounded-xl h-full max-h-[320px]\">
\t\t\t\t\t\t<span class=\"border border-l-0 border-r-0 border-[#BFD2E0] py-4\">Lorem ipsum dolor
\t\t\t\t\t\t\t<a href=\"#\" class=\"underline\">amet Link</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"border-[#BFD2E0] py-4\">Lorem ipsum dolor
\t\t\t\t\t\t\t<a href=\"#\" class=\"underline\">amet Link</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<span class=\"border border-l-0 border-r-0 border-[#BFD2E0] py-4\">Lorem ipsum dolor
\t\t\t\t\t\t\t<a href=\"#\" class=\"underline\">amet Link</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<div class=\"flex justify-end items-center text-accent-blue text-[26px] font-black gap-1 mt-11\">
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/bell.png') }}\" class=\"w-[26px] h-[23px] object-contain -mt-1\" alt=\"\"/>
\t\t\t\t\t\t\tNotifications
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Home Tab end -->

\t  ", "pages/tab-home.html.twig", "/var/www/html/templates/pages/tab-home.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 15];
        static $functions = ["asset" => 15];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['asset'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
