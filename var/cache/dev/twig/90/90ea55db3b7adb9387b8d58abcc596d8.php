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

/* pages/tab-account.html.twig */
class __TwigTemplate_73c22ea120ed912120349be60be96304 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-account.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/tab-account.html.twig"));

        // line 1
        yield " 
\t<!-- Account Tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"account\" data-tab=\"account\">
\t\t<div class=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<div class=\"flex gap-16 lg-max:flex-col xl-max:gap-6 transition-all duration-1000 w-full pr-6 pl-6\" id=\"accountArea\">
\t\t\t\t<div class=\"flex flex-col w-full max-w-[66%] lg-max:order-2 lg-max:max-w-full\">
\t\t\t\t\t<div class=\"flex mb-[33px] sm-max:text-xl justify-between items-center w-full text-[30px] font-black uppercase text-basic-blue\">
\t\t\t\t\t\tUploaded files
\t\t\t\t\t\t<a class=\"bg-btn normal-case w-fit flex items-center text-base font-semibold md-max:text-[12px] md-max:px-3 px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\" aria-label=\"Upload more files\" href=\"../src/upload.html\">
\t\t\t\t\t\t\tUpload more files
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-6\">
\t\t\t\t\t\t<div class=\"flex md-max:flex-col gap-4 justify-between items-center shadow-md bg-white px-6 py-[26px] rounded-xl\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-basic-blue text-base md-max:w-full\">
\t\t\t\t\t\t\t\tTitle:
\t\t\t\t\t\t\t\t<span class=\"text-black font-light text-base\">Example images Headline 1</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex gap-[55px] sm-max:gap-4 items-center md-max:justify-between md-max:w-full sm-max:grid sm-max:grid-flow-row-dense sm-max:grid-cols-2\">
\t\t\t\t\t\t\t\t<div class=\"flex flex-col text-basic-blue text-base md-max:w-full\">
\t\t\t\t\t\t\t\t\tUploaded files:
\t\t\t\t\t\t\t\t\t<span class=\"text-black font-light text-base\">12 files
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex flex-col text-basic-blue text-base md-max:w-full\">
\t\t\t\t\t\t\t\t\tUpload date:
\t\t\t\t\t\t\t\t\t<span class=\"text-black font-light text-base\">24.01.2025</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"editBtn cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/edit-blue.svg"), "html", null, true);
        yield "\" alt=\"Edit\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex flex-col max-w-[33%] lg-max:flex-row md-max:flex-wrap lg-max:order-1 lg-max:max-w-full w-full gap-7 lg-max:gap-6\">
\t\t\t\t\t<div class=\"max-w-[438px] w-full md-max:max-w-full shadow-md px-[26px] lg-max:m-0 py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex justify-between\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold pr-4\">
\t\t\t\t\t\t\t\tAccount Information
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"edit cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/edit-blue.svg"), "html", null, true);
        yield "\" alt=\"Edit\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-l-0 border-r-0 border-[#BFD2E0] mt-[23px] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Name:</span>
\t\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Email:</span>
\t\t\t\t\t\t\tmax.mustermann@mail.com
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex mb-4 flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Password:</span>
\t\t\t\t\t\t\t********************
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"max-w-[438px] gap-4 w-full md-max:max-w-full lg-max:m-0 shadow-md px-[26px] py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex justify-between\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold\">
\t\t\t\t\t\t\t\tInvite a new user
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light py-2 text-base\">
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consetetur sadipscing elitr,
\t\t\t\t\t\t\t                        sed diam nonumy eirmod tempor invidunt.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"bg-btn normal-case cursor-pointer w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\" aria-label=\"Invite new user\">
\t\t\t\t\t\t\tInvite new user
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 md-max:gap-3 transition-all duration-1000 w-full md-max:pr-6 pl-6 hidden\" id=\"editArea\">
\t\t\t\t<!-- edit 1  -->
\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"edit Card\">
\t\t\t\t\t<div class=\"relative flex px-5 flex-col bg-[#F2F5F9] items-center justify-center pt-7 pb-4\">
\t\t\t\t\t\t<div class=\"flex bg-[#F2F5F9] items-center justify-center\">
\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/select-all-grey.svg"), "html", null, true);
        yield "\" alt=\"Select all\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/edit1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"w-full max-w-[182px] md-max:w-[80%] object-cover rounded-0\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"py-[14px]\">
\t\t\t\t\t\t\tFST-image-Hier-steht-als-Beispiel-der-sehr-lange-Dateiname.jpg
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<input placeholder=\"Asset title\" type=\"text\" class=\"w-full mb-2 text-base py-[10px] px-5 pr-10 rounded-md border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\" aria-label=\"Asset title\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-white\">
\t\t\t\t\t\t<form class=\"p-5 flex flex-col gap-3\">
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" value=\"Photo\" required aria-label=\"Media Type\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tMedia Type
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Brand\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tBrand
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Topics\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tTopics
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Restrictions\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tRestrictions
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Region\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tRegion
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" value=\"English\" required aria-label=\"Language\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tLanguage
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full mb-4\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Source\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tSource
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Account Tab end --> 
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
        return "pages/tab-account.html.twig";
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
        return array (  145 => 85,  140 => 83,  98 => 44,  81 => 30,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" 
\t<!-- Account Tab start -->
\t<div id=\"tabContent\" class=\"tab-content home flex-1 transition-all duration-1000 px-14 2xl-max:px-0 max-w-[1500px] mx-auto\" style=\"transition: width 0.3s ease\" aria-label=\"account\" data-tab=\"account\">
\t\t<div class=\"content-area pb-6 h-full desktop-margin md-max:pl-0\" id=\"content-area\">
\t\t\t<div class=\"flex gap-16 lg-max:flex-col xl-max:gap-6 transition-all duration-1000 w-full pr-6 pl-6\" id=\"accountArea\">
\t\t\t\t<div class=\"flex flex-col w-full max-w-[66%] lg-max:order-2 lg-max:max-w-full\">
\t\t\t\t\t<div class=\"flex mb-[33px] sm-max:text-xl justify-between items-center w-full text-[30px] font-black uppercase text-basic-blue\">
\t\t\t\t\t\tUploaded files
\t\t\t\t\t\t<a class=\"bg-btn normal-case w-fit flex items-center text-base font-semibold md-max:text-[12px] md-max:px-3 px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\" aria-label=\"Upload more files\" href=\"../src/upload.html\">
\t\t\t\t\t\t\tUpload more files
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex flex-col gap-6\">
\t\t\t\t\t\t<div class=\"flex md-max:flex-col gap-4 justify-between items-center shadow-md bg-white px-6 py-[26px] rounded-xl\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-basic-blue text-base md-max:w-full\">
\t\t\t\t\t\t\t\tTitle:
\t\t\t\t\t\t\t\t<span class=\"text-black font-light text-base\">Example images Headline 1</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"flex gap-[55px] sm-max:gap-4 items-center md-max:justify-between md-max:w-full sm-max:grid sm-max:grid-flow-row-dense sm-max:grid-cols-2\">
\t\t\t\t\t\t\t\t<div class=\"flex flex-col text-basic-blue text-base md-max:w-full\">
\t\t\t\t\t\t\t\t\tUploaded files:
\t\t\t\t\t\t\t\t\t<span class=\"text-black font-light text-base\">12 files
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex flex-col text-basic-blue text-base md-max:w-full\">
\t\t\t\t\t\t\t\t\tUpload date:
\t\t\t\t\t\t\t\t\t<span class=\"text-black font-light text-base\">24.01.2025</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"editBtn cursor-pointer\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/edit-blue.svg') }}\" alt=\"Edit\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"flex flex-col max-w-[33%] lg-max:flex-row md-max:flex-wrap lg-max:order-1 lg-max:max-w-full w-full gap-7 lg-max:gap-6\">
\t\t\t\t\t<div class=\"max-w-[438px] w-full md-max:max-w-full shadow-md px-[26px] lg-max:m-0 py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex justify-between\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold pr-4\">
\t\t\t\t\t\t\t\tAccount Information
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"edit cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/edit-blue.svg') }}\" alt=\"Edit\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-l-0 border-r-0 border-[#BFD2E0] mt-[23px] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Name:</span>
\t\t\t\t\t\t\tMax Mustermann
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Email:</span>
\t\t\t\t\t\t\tmax.mustermann@mail.com
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex mb-4 flex-col font-light border border-t-0 border-l-0 border-r-0 border-[#BFD2E0] py-2 text-base\">
\t\t\t\t\t\t\t<span class=\"text-basic-blue font-medium\">Password:</span>
\t\t\t\t\t\t\t********************
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"max-w-[438px] gap-4 w-full md-max:max-w-full lg-max:m-0 shadow-md px-[26px] py-[33px] h-fit rounded-xl md-max:mx-6 z-[999] bg-white\">
\t\t\t\t\t\t<div class=\"flex justify-between\">
\t\t\t\t\t\t\t<div class=\"flex flex-col text-2xl font-semibold\">
\t\t\t\t\t\t\t\tInvite a new user
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"flex flex-col font-light py-2 text-base\">
\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consetetur sadipscing elitr,
\t\t\t\t\t\t\t                        sed diam nonumy eirmod tempor invidunt.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"bg-btn normal-case cursor-pointer w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\" aria-label=\"Invite new user\">
\t\t\t\t\t\t\tInvite new user
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"flex flex-row flex-wrap gap-7 md-max:gap-3 transition-all duration-1000 w-full md-max:pr-6 pl-6 hidden\" id=\"editArea\">
\t\t\t\t<!-- edit 1  -->
\t\t\t\t<div class=\"asset-card w-[312px] shadow-xl rounded-2xl overflow-hidden active\" aria-label=\"edit Card\">
\t\t\t\t\t<div class=\"relative flex px-5 flex-col bg-[#F2F5F9] items-center justify-center pt-7 pb-4\">
\t\t\t\t\t\t<div class=\"flex bg-[#F2F5F9] items-center justify-center\">
\t\t\t\t\t\t\t<div class=\"absolute top-2 left-2 bg-white rounded-full p-1 cursor-pointer\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/svg/select-all-grey.svg') }}\" alt=\"Select all\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<img src=\"{{ asset('build/images/edit1.png') }}\" alt=\"\" class=\"w-full max-w-[182px] md-max:w-[80%] object-cover rounded-0\"/>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<p class=\"py-[14px]\">
\t\t\t\t\t\t\tFST-image-Hier-steht-als-Beispiel-der-sehr-lange-Dateiname.jpg
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<input placeholder=\"Asset title\" type=\"text\" class=\"w-full mb-2 text-base py-[10px] px-5 pr-10 rounded-md border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\" aria-label=\"Asset title\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"bg-white\">
\t\t\t\t\t\t<form class=\"p-5 flex flex-col gap-3\">
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" value=\"Photo\" required aria-label=\"Media Type\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tMedia Type
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Brand\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tBrand
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Topics\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tTopics
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Restrictions\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tRestrictions
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Region\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tRegion
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" value=\"English\" required aria-label=\"Language\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tLanguage
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"title\" class=\"block relative max-w-[488px] w-full mb-4\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"title\" class=\"block capitalize h-[55px] text-base font-semibold w-full py-4 text-gray-900 bg-white bg-transparent border border-l-0 border-r-0 border-t-0 border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\" placeholder=\"\" style=\"padding: 0\" required aria-label=\"Source\"/>
\t\t\t\t\t\t\t\t<span class=\"absolute text-base font-semibold duration-300 text-basic-blue transform scale-75 -top-1 z-10 origin-[0] peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-0 peer-focus:scale-75 px-0\">
\t\t\t\t\t\t\t\t\tSource
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div> 
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Account Tab end --> 
", "pages/tab-account.html.twig", "/var/www/html/templates/pages/tab-account.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 30];
        static $functions = ["asset" => 30];

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
