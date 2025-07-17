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

/* pages/tab-uploads.html.twig */
class __TwigTemplate_31d8537a18247472fe027cee9a586732 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-uploads.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-uploads.html.twig"));

        // line 1
        yield " 
\t<!-- Upload Tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"upload\" data-tab=\"upload\">
\t\t<div class=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<div class=\"flex flex-row flex-wrap gap-7 md-max:gap-3 transition-all duration-1000 w-full md-max:pr-6 pl-6\" id=\"not-upload\">
\t\t\t\t<div class=\"z-0 relative\">
\t\t\t\t\t<div class=\"text-[22px] sm-max:text-lg font-semibold flex gap-2 sm-max:flex-wrap\">
\t\t\t\t\t\tFiles for Upload:
\t\t\t\t\t\t<span class=\"text-accent-blue text-lg sm-max:text-base font-black uppercase pr-3\">[10 Files]</span>
\t\t\t\t\t\t<div class=\"delete flex gap-2 text-base font-semibold cursor-pointer\">
\t\t\t\t\t\t\t<img src=\"../src/images/trash.png\" alt=\"\" class=\"h-5 object-contain\"/>
\t\t\t\t\t\t\tDelete all files
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full relative mt-10 md-max:mt-4\">
\t\t\t\t\t<!-- upload card 1  -->
\t\t\t\t\t<div class=\"upload-card w-[190px] h-[190px] relative\" aria-label=\"Upload Card\">
\t\t\t\t\t\t<div class=\"flex bg-[#99BFDB] items-center justify-center overflow-hidden rounded-xl\">
\t\t\t\t\t\t\t<img src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/car.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full h-[190px] object-cover\"/>
\t\t\t\t\t\t\t<img src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/delete.svg"), "html", null, true);
        yield "\" alt=\"\" class=\"absolute z-20 -right-3 -top-3 cursor-pointer shadow-lg rounded-full\"/>
\t\t\t\t\t\t\t<div class=\"overlay text-sm font-semibold text-white absolute z-10 bg-[#004388] opacity-80 h-full w-full rounded-xl\">
\t\t\t\t\t\t\t\t<div class=\"inner flex flex-col justify-end h-full py-6 px-3\">
\t\t\t\t\t\t\t\t\t<span class=\"text-base\">
\t\t\t\t\t\t\t\t\t\t2,3 MB</span>
\t\t\t\t\t\t\t\t\tBeispiel-für-einen-langen-Dateinamen.jpg
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-col flex-wrap gap-[18px] mb-[100px] sm-max:mb-[130px] transition-all duration-1000 w-full md-max:pr-6 pl-6 h-full mt-20 hidden\" id=\"upload-success\">
\t\t\t\t<img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/upload.png"), "html", null, true);
        yield "\" alt=\"\" class=\"h-[54px] w-[54px] object-contain\"/>
\t\t\t\t<span class=\"text-[36px] sm-max:text-3xl font-black text-basic-blue uppercase\">
\t\t\t\t\tThe files were uploaded successfully
\t\t\t\t</span>
\t\t\t\t<span class=\"text-[22px] sm-max:text-lg font-semibold\">The files are waiting to be processed under the “Account”
\t\t\t\t\t                    section.</span>
\t\t\t\t<a class=\"bg-btn w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\" aria-label=\"Edit File\" href=\"../src/account.html\">
\t\t\t\t\tEdit files
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Upload Tab end -->
 
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/tab-uploads.html.twig";
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
        return array (  93 => 36,  76 => 22,  72 => 21,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
\t<!-- Upload Tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"upload\" data-tab=\"upload\">
\t\t<div class=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<div class=\"flex flex-row flex-wrap gap-7 md-max:gap-3 transition-all duration-1000 w-full md-max:pr-6 pl-6\" id=\"not-upload\">
\t\t\t\t<div class=\"z-0 relative\">
\t\t\t\t\t<div class=\"text-[22px] sm-max:text-lg font-semibold flex gap-2 sm-max:flex-wrap\">
\t\t\t\t\t\tFiles for Upload:
\t\t\t\t\t\t<span class=\"text-accent-blue text-lg sm-max:text-base font-black uppercase pr-3\">[10 Files]</span>
\t\t\t\t\t\t<div class=\"delete flex gap-2 text-base font-semibold cursor-pointer\">
\t\t\t\t\t\t\t<img src=\"../src/images/trash.png\" alt=\"\" class=\"h-5 object-contain\"/>
\t\t\t\t\t\t\tDelete all files
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div
\t\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 transition-all duration-1000 w-full relative mt-10 md-max:mt-4\">
\t\t\t\t\t<!-- upload card 1  -->
\t\t\t\t\t<div class=\"upload-card w-[190px] h-[190px] relative\" aria-label=\"Upload Card\">
\t\t\t\t\t\t<div class=\"flex bg-[#99BFDB] items-center justify-center overflow-hidden rounded-xl\">
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/car.png') }}\" alt=\"\" class=\"w-full h-[190px] object-cover\"/>
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/delete.svg') }}\" alt=\"\" class=\"absolute z-20 -right-3 -top-3 cursor-pointer shadow-lg rounded-full\"/>
\t\t\t\t\t\t\t<div class=\"overlay text-sm font-semibold text-white absolute z-10 bg-[#004388] opacity-80 h-full w-full rounded-xl\">
\t\t\t\t\t\t\t\t<div class=\"inner flex flex-col justify-end h-full py-6 px-3\">
\t\t\t\t\t\t\t\t\t<span class=\"text-base\">
\t\t\t\t\t\t\t\t\t\t2,3 MB</span>
\t\t\t\t\t\t\t\t\tBeispiel-für-einen-langen-Dateinamen.jpg
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t 
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flex flex-col flex-wrap gap-[18px] mb-[100px] sm-max:mb-[130px] transition-all duration-1000 w-full md-max:pr-6 pl-6 h-full mt-20 hidden\" id=\"upload-success\">
\t\t\t\t<img src=\"{{ asset('build/images/upload.png') }}\" alt=\"\" class=\"h-[54px] w-[54px] object-contain\"/>
\t\t\t\t<span class=\"text-[36px] sm-max:text-3xl font-black text-basic-blue uppercase\">
\t\t\t\t\tThe files were uploaded successfully
\t\t\t\t</span>
\t\t\t\t<span class=\"text-[22px] sm-max:text-lg font-semibold\">The files are waiting to be processed under the “Account”
\t\t\t\t\t                    section.</span>
\t\t\t\t<a class=\"bg-btn w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\" aria-label=\"Edit File\" href=\"../src/account.html\">
\t\t\t\t\tEdit files
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Upload Tab end -->
 
", "pages/tab-uploads.html.twig", "/var/www/html/templates/pages/tab-uploads.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 21];
        static $functions = ["asset" => 21];

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
