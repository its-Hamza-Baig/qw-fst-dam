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

/* partials/navbar.twig */
class __TwigTemplate_b8066fa60ffa1fd8c67e6fd7d4d098c1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navbar.twig"));

        // line 1
        yield "
    <div class=\"mx-auto max-h-[300px] pl-24 z-10 max-w-[1400px]\" id=\"header\">
      <header
        class=\"flex justify-between py-6 z-10 sticky desktop-margin px-6 md-max:pl-0\"
      >
        <a href=\"#\">
         
          <img
              src=\"";
        // line 9
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 9, $this->source); })()), "logo", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 9, $this->source); })()), "logo", [], "any", false, false, true, 9), 9, $this->source), "html", null, true)) : ("../images/Freudenberg Logo.png"));
        yield "\"
              alt=\"Logo\"
              class=\"md-max:h-6 sm-max:h-4\"
          />
           
        </a>
        <div class=\"font-black uppercase flex items-center\">
          <img
            src=\"";
        // line 17
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 17, $this->source); })()), "rightImage", [], "any", false, false, true, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 17, $this->source); })()), "rightImage", [], "any", false, false, true, 17), 17, $this->source), "html", null, true)) : ("../images/FST Media Portal.png"));
        yield "\"
            alt=\"Logo\"
            class=\"sm-max:h-[14px] hidden\"
            id=\"home-header-image\"
          />
          <div class=\"flex items-center text-basic-blue\" id=\"not-home-tab\">
            <span id=\"heading\" class=\"text-5xl lg-max:text-[1.2rem]\"
              >";
        // line 24
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 24, $this->source); })()), "heading", [], "any", false, false, true, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 24, $this->source); })()), "heading", [], "any", false, false, true, 24), 24, $this->source), "html", null, true)) : ("Assets"));
        yield "</span
            >
            <span
              class=\"text-xl md-max:text-sm text-accent-blue ml-3 sm-max:ml-1\"
              id=\"numbers\"
              >[";
        // line 29
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 29, $this->source); })()), "rightNumber", [], "any", false, false, true, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 29, $this->source); })()), "rightNumber", [], "any", false, false, true, 29), 29, $this->source), "html", null, true)) : ("12:325"));
        yield "]</span
            >
          </div>
        </div>
      </header>
      <!-- Search and Action Buttons -->
      <div
        id=\"search-bar\"
        class=\"flex items-center flex-wrap gap-5 justify-between mb-2 pb-[14px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div class=\"relative max-w-[428px] w-full\" id=\"asset-search\">
          <input
            type=\"text\"
            placeholder=\"Hier steht ein sehr sehr sehr sehr langer Suchbe\"
            class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\"
            aria-label=\"Search input field\"
          />
          <div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
            <img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/search-icon.svg"), "html", null, true);
        yield "\" alt=\"search icon\">
          </div>
        </div>

        <div class=\"flex gap-3 flex-wrap\">
          <button
            class=\"flex items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Share files\"
          >
            <img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/share-white.svg"), "html", null, true);
        yield "\" alt=\"share icon\">

            Share files (2)
          </button>
          <button
            class=\"flex add-collection items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white\"
            aria-label=\"Add to collection\"
          >
            <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/collections-black.svg"), "html", null, true);
        yield "\" alt=\"Collection\">

            Add to collection
          </button>
          <button
            class=\"flex openDownloadModal items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/download-black.svg"), "html", null, true);
        yield "\" alt=\"Download\">

            Download (2)
          </button>
        </div>
      </div>
      <!-- packages-searchbar -->
      <div
        id=\"packages-search-bar\"
        class=\"flex hidden items-center flex-wrap gap-5 justify-between pb-[12px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"flex text-lg font-semibold gap-2 items-center hidden py-[10px]\"
          id=\"back-package\"
        >
          <img
            src=\"../images/back.svg\"
            alt=\"\"
            class=\"cursor-pointer mb-1\"
            data-back-btn=\"1\"
          />
          back to package overview
        </div>
        <div class=\"relative max-w-[520px] w-full\" id=\"search\">
          <input
            type=\"text\"
            placeholder=\"Enter search item\"
            class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\"
            aria-label=\"Search input field\"
          />
          <div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
            <img src=\"../images/svg/search-icon.svg\" alt=\"Search\">
          </div>
        </div>

        <div class=\"flex gap-3 flex-wrap hidden\" id=\"search-group-btn\">
          <button
            class=\"flex items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Share files\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"Share\">

            Share files (2)
          </button>
          <button
            class=\"flex openShareModal items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white\"
            aria-label=\"share package\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"Share\">
            Share package
          </button>
          <button
            class=\"flex openDownloadModal items-center openDownloadModal text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"../images/svg/download-black.svg\" alt=\"Download\">

            Download (2)
          </button>
        </div>
      </div>
      <!-- collection-searchbar -->
      <div
        id=\"collection-search-bar\"
        class=\"flex hidden items-center flex-wrap gap-5 lg-max:pb-2 justify-between mb-3 border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"flex text-lg font-semibold gap-2 items-center hidden py-[15px]\"
          id=\"back-collection\"
        >
          <img
            src=\"../images/back.svg\"
            alt=\"\"
            class=\"cursor-pointer mb-1\"
            data-collection-back-btn=\"1\"
          />
          back to collection overview
        </div>
        <div
          class=\"button-group flex gap-6 overflow-x-auto w-screen\"
          id=\"collection-step-btn\"
        >
          <div class=\"flex gap-6 lg-max:py-2 pb-4\">
            <button
              class=\"text-sm font-semibold lg-max:w-[240px] min-h-[56px] px-16 bg-tints-blue border border-[#BFD2E0] rounded-xl gap-1 flex items-center active\"
            >
              All Collections
              <span class=\"text-accent-blue font-black\">[7]</span>
            </button>
            <button
              class=\"text-sm font-semibold px-6 min-h-[56px] lg-max:w-[240px] bg-tints-blue border border-[#BFD2E0] rounded-xl flex items-center gap-1\"
            >
              <img src=\"../images/share.png\" class=\"h-8 mr-2 -mt-2\" alt=\"\" />
              Shared Collections
              <span class=\"text-accent-blue font-black\">[3]</span>
            </button>
            <button
              class=\"text-sm font-semibold px-6 min-h-[56px] lg-max:w-[250px] bg-tints-blue border border-[#BFD2E0] rounded-xl flex items-center gap-1\"
            >
              <img src=\"../images/share.png\" class=\"h-8 mr-2 -mt-2\" alt=\"\" />
              Received Collections
              <span class=\"text-accent-blue font-black\">[4]</span>
            </button>
          </div>
        </div>

        <div class=\"flex gap-3 flex-wrap hidden\" id=\"collection-group-btn\">
          <button
            class=\"flex items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Share files\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"share icon\">

            Share files (2)
          </button>
          <button
            class=\"flex openShareCollectionModal items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white\"
            aria-label=\"Share collection\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"share icon\">
            Share collection
          </button>
          <button
            class=\"flex items-center openDownloadModal text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"../images/svg/download-black.svg\" alt=\"Download\">

            Download (2)
          </button>
        </div>
      </div>
      <!-- branding-searchbar -->
      <div
        id=\"branding-search-bar\"
        class=\"flex items-center hidden flex-wrap gap-5 justify-between pb-[12px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"relative max-w-[520px] lg-max:max-w-[50%] w-full\"
          id=\"search\"
        >
          <input
            type=\"text\"
            placeholder=\"Enter search item\"
            class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\"
            aria-label=\"Search input field\"
          />
          <div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
            <img src=\"../images/svg/search-icon.svg\" alt=\"Search\">
          </div>
        </div>
        <div class=\"flex gap-3 flex-wrap\">
          <button
            class=\"flex openDownloadModal bg-btn items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"../images/svg/download-white.svg\" alt=\"closeDownloadModal\">

            Download (all)
          </button>
        </div>
      </div>
      <!-- upload-searchbar -->
      <div
        id=\"upload-search-bar\"
        class=\"flex items-center hidden flex-wrap gap-6 md-max:gap-3 justify-between pb-[12px] pt-2 border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"flex gap-6 md-max:gap-3 w-[80%] md-max:w-full md-max:flex-col\"
        >
          <div class=\"file-upload max-w-[584px] w-full text-center\">
            <input type=\"file\" id=\"fileInput\" class=\"file-input\" />
            <label
              for=\"fileInput\"
              class=\"file-label max-w-[584px] w-full justify-center\"
            >
              <span class=\"icon\">
                <img src=\"../images/svg/upload-blue.svg\" alt=\"Upload\">
              </span>
              <span class=\"text\">Drag & Drop your files here:</span>
            </label>
          </div>
          <label for=\"title\" class=\"block relative max-w-[488px] w-full\">
            <input
              type=\"text\"
              id=\"title\"
              class=\"block h-[55px] text-base font-semibold w-full px-5 py-4 text-gray-900 bg-white bg-transparent rounded-lg border border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\"
              placeholder=\"
          \"
              required
              aria-label=\"Enter a title\"
            />
            <span
              class=\"absolute px-5 text-base font-semibold duration-300 text-tints-black transform -translate-y-2 scale-75 top-2 z-10 origin-[0] peer-focus:px-6 peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-2\"
            >
              Enter a title
            </span>
          </label>
        </div>
        <div class=\"flex gap-3 flex-wrap\">
          <button
            class=\"bg-btn w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\"
            aria-label=\"Upload file\"
            id=\"uploadBtn\"
          >
            <img src=\"../images/svg/upload-white.svg\" alt=\"Upload\">

            Upload files
          </button>
        </div>
      </div>
      <!-- account searchbar -->
      <div
        id=\"account-search-bar\"
        class=\"flex items-center hidden flex-wrap gap-5 xl-max:gap-3 justify-between mb-2 pb-[14px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div class=\"flex flex-col uppercase text-xl text-basic-blue font-black\">
          Example images Headline 1
          <span class=\"text-base font-light text-black normal-case\"
            >2/12 Assets selected</span
          >
        </div>

        <div class=\"flex gap-8 md-max:gap-3 flex-wrap items-center\">
          <div class=\"flex select-all-assets gap-3 items-center active\">
            <img src=\"../images/svg/select-all-grey.svg\" alt=\"Select all\">

            Select all Assets
          </div>
          <button
            class=\"bg-btn w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\"
            aria-label=\"Save\"
          >
            <img src=\"../images/svg/save-grey.svg\" alt=\"Save\">

            Save
          </button>
          <button
            class=\"flex published items-center text-base font-semibold md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Publish assets\"
          >
            <img src=\"../images/svg/upload-black.svg\" alt=\"Save\">

            Publish assets
          </button>
        </div>
      </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navbar.twig";
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
        return array (  143 => 71,  132 => 63,  121 => 55,  109 => 46,  89 => 29,  81 => 24,  71 => 17,  60 => 9,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    <div class=\"mx-auto max-h-[300px] pl-24 z-10 max-w-[1400px]\" id=\"header\">
      <header
        class=\"flex justify-between py-6 z-10 sticky desktop-margin px-6 md-max:pl-0\"
      >
        <a href=\"#\">
         
          <img
              src=\"{{ navbar.logo ? navbar.logo : '../images/Freudenberg Logo.png' }}\"
              alt=\"Logo\"
              class=\"md-max:h-6 sm-max:h-4\"
          />
           
        </a>
        <div class=\"font-black uppercase flex items-center\">
          <img
            src=\"{{ navbar.rightImage ? navbar.rightImage : '../images/FST Media Portal.png' }}\"
            alt=\"Logo\"
            class=\"sm-max:h-[14px] hidden\"
            id=\"home-header-image\"
          />
          <div class=\"flex items-center text-basic-blue\" id=\"not-home-tab\">
            <span id=\"heading\" class=\"text-5xl lg-max:text-[1.2rem]\"
              >{{ navbar.heading ? navbar.heading : \"Assets\" }}</span
            >
            <span
              class=\"text-xl md-max:text-sm text-accent-blue ml-3 sm-max:ml-1\"
              id=\"numbers\"
              >[{{ navbar.rightNumber ? navbar.rightNumber : \"12:325\" }}]</span
            >
          </div>
        </div>
      </header>
      <!-- Search and Action Buttons -->
      <div
        id=\"search-bar\"
        class=\"flex items-center flex-wrap gap-5 justify-between mb-2 pb-[14px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div class=\"relative max-w-[428px] w-full\" id=\"asset-search\">
          <input
            type=\"text\"
            placeholder=\"Hier steht ein sehr sehr sehr sehr langer Suchbe\"
            class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\"
            aria-label=\"Search input field\"
          />
          <div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
            <img src=\"{{ asset('build/images/svg/search-icon.svg') }}\" alt=\"search icon\">
          </div>
        </div>

        <div class=\"flex gap-3 flex-wrap\">
          <button
            class=\"flex items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Share files\"
          >
            <img src=\"{{ asset('build/images/svg/share-white.svg') }}\" alt=\"share icon\">

            Share files (2)
          </button>
          <button
            class=\"flex add-collection items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white\"
            aria-label=\"Add to collection\"
          >
            <img src=\"{{ asset('build/images/svg/collections-black.svg') }}\" alt=\"Collection\">

            Add to collection
          </button>
          <button
            class=\"flex openDownloadModal items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"{{ asset('build/images/svg/download-black.svg') }}\" alt=\"Download\">

            Download (2)
          </button>
        </div>
      </div>
      <!-- packages-searchbar -->
      <div
        id=\"packages-search-bar\"
        class=\"flex hidden items-center flex-wrap gap-5 justify-between pb-[12px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"flex text-lg font-semibold gap-2 items-center hidden py-[10px]\"
          id=\"back-package\"
        >
          <img
            src=\"../images/back.svg\"
            alt=\"\"
            class=\"cursor-pointer mb-1\"
            data-back-btn=\"1\"
          />
          back to package overview
        </div>
        <div class=\"relative max-w-[520px] w-full\" id=\"search\">
          <input
            type=\"text\"
            placeholder=\"Enter search item\"
            class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\"
            aria-label=\"Search input field\"
          />
          <div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
            <img src=\"../images/svg/search-icon.svg\" alt=\"Search\">
          </div>
        </div>

        <div class=\"flex gap-3 flex-wrap hidden\" id=\"search-group-btn\">
          <button
            class=\"flex items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Share files\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"Share\">

            Share files (2)
          </button>
          <button
            class=\"flex openShareModal items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white\"
            aria-label=\"share package\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"Share\">
            Share package
          </button>
          <button
            class=\"flex openDownloadModal items-center openDownloadModal text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"../images/svg/download-black.svg\" alt=\"Download\">

            Download (2)
          </button>
        </div>
      </div>
      <!-- collection-searchbar -->
      <div
        id=\"collection-search-bar\"
        class=\"flex hidden items-center flex-wrap gap-5 lg-max:pb-2 justify-between mb-3 border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"flex text-lg font-semibold gap-2 items-center hidden py-[15px]\"
          id=\"back-collection\"
        >
          <img
            src=\"../images/back.svg\"
            alt=\"\"
            class=\"cursor-pointer mb-1\"
            data-collection-back-btn=\"1\"
          />
          back to collection overview
        </div>
        <div
          class=\"button-group flex gap-6 overflow-x-auto w-screen\"
          id=\"collection-step-btn\"
        >
          <div class=\"flex gap-6 lg-max:py-2 pb-4\">
            <button
              class=\"text-sm font-semibold lg-max:w-[240px] min-h-[56px] px-16 bg-tints-blue border border-[#BFD2E0] rounded-xl gap-1 flex items-center active\"
            >
              All Collections
              <span class=\"text-accent-blue font-black\">[7]</span>
            </button>
            <button
              class=\"text-sm font-semibold px-6 min-h-[56px] lg-max:w-[240px] bg-tints-blue border border-[#BFD2E0] rounded-xl flex items-center gap-1\"
            >
              <img src=\"../images/share.png\" class=\"h-8 mr-2 -mt-2\" alt=\"\" />
              Shared Collections
              <span class=\"text-accent-blue font-black\">[3]</span>
            </button>
            <button
              class=\"text-sm font-semibold px-6 min-h-[56px] lg-max:w-[250px] bg-tints-blue border border-[#BFD2E0] rounded-xl flex items-center gap-1\"
            >
              <img src=\"../images/share.png\" class=\"h-8 mr-2 -mt-2\" alt=\"\" />
              Received Collections
              <span class=\"text-accent-blue font-black\">[4]</span>
            </button>
          </div>
        </div>

        <div class=\"flex gap-3 flex-wrap hidden\" id=\"collection-group-btn\">
          <button
            class=\"flex items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Share files\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"share icon\">

            Share files (2)
          </button>
          <button
            class=\"flex openShareCollectionModal items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white\"
            aria-label=\"Share collection\"
          >
            <img src=\"../images/svg/share-black.svg\" alt=\"share icon\">
            Share collection
          </button>
          <button
            class=\"flex items-center openDownloadModal text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"../images/svg/download-black.svg\" alt=\"Download\">

            Download (2)
          </button>
        </div>
      </div>
      <!-- branding-searchbar -->
      <div
        id=\"branding-search-bar\"
        class=\"flex items-center hidden flex-wrap gap-5 justify-between pb-[12px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"relative max-w-[520px] lg-max:max-w-[50%] w-full\"
          id=\"search\"
        >
          <input
            type=\"text\"
            placeholder=\"Enter search item\"
            class=\"w-full text-base py-3.5 px-7 pr-10 md-max:pr-[55px] rounded-full border placeholder:text-tints-black focus:outline-none border-1 border-tints-light-blue focus:border-tints-light-blue drop-shadow-md\"
            aria-label=\"Search input field\"
          />
          <div class=\"absolute right-5 top-1/2 transform -translate-y-1/2\">
            <img src=\"../images/svg/search-icon.svg\" alt=\"Search\">
          </div>
        </div>
        <div class=\"flex gap-3 flex-wrap\">
          <button
            class=\"flex openDownloadModal bg-btn items-center text-base md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Download all files\"
          >
            <img src=\"../images/svg/download-white.svg\" alt=\"closeDownloadModal\">

            Download (all)
          </button>
        </div>
      </div>
      <!-- upload-searchbar -->
      <div
        id=\"upload-search-bar\"
        class=\"flex items-center hidden flex-wrap gap-6 md-max:gap-3 justify-between pb-[12px] pt-2 border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div
          class=\"flex gap-6 md-max:gap-3 w-[80%] md-max:w-full md-max:flex-col\"
        >
          <div class=\"file-upload max-w-[584px] w-full text-center\">
            <input type=\"file\" id=\"fileInput\" class=\"file-input\" />
            <label
              for=\"fileInput\"
              class=\"file-label max-w-[584px] w-full justify-center\"
            >
              <span class=\"icon\">
                <img src=\"../images/svg/upload-blue.svg\" alt=\"Upload\">
              </span>
              <span class=\"text\">Drag & Drop your files here:</span>
            </label>
          </div>
          <label for=\"title\" class=\"block relative max-w-[488px] w-full\">
            <input
              type=\"text\"
              id=\"title\"
              class=\"block h-[55px] text-base font-semibold w-full px-5 py-4 text-gray-900 bg-white bg-transparent rounded-lg border border-[#BFD2E0] appearance-none focus:outline-none focus:ring-0 focus:border-[#BFD2E0] peer\"
              placeholder=\"
          \"
              required
              aria-label=\"Enter a title\"
            />
            <span
              class=\"absolute px-5 text-base font-semibold duration-300 text-tints-black transform -translate-y-2 scale-75 top-2 z-10 origin-[0] peer-focus:px-6 peer-focus:text-basic-blue peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-2\"
            >
              Enter a title
            </span>
          </label>
        </div>
        <div class=\"flex gap-3 flex-wrap\">
          <button
            class=\"bg-btn w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\"
            aria-label=\"Upload file\"
            id=\"uploadBtn\"
          >
            <img src=\"../images/svg/upload-white.svg\" alt=\"Upload\">

            Upload files
          </button>
        </div>
      </div>
      <!-- account searchbar -->
      <div
        id=\"account-search-bar\"
        class=\"flex items-center hidden flex-wrap gap-5 xl-max:gap-3 justify-between mb-2 pb-[14px] border-b border-tints-light-blue mt-2 desktop-margin mx-6\">
        <div class=\"flex flex-col uppercase text-xl text-basic-blue font-black\">
          Example images Headline 1
          <span class=\"text-base font-light text-black normal-case\"
            >2/12 Assets selected</span
          >
        </div>

        <div class=\"flex gap-8 md-max:gap-3 flex-wrap items-center\">
          <div class=\"flex select-all-assets gap-3 items-center active\">
            <img src=\"../images/svg/select-all-grey.svg\" alt=\"Select all\">

            Select all Assets
          </div>
          <button
            class=\"bg-btn w-fit flex items-center text-base font-semibold md-max:text-[12px] px-8 py-[9px] rounded-full gap-2 text-white bg-basic-blue border-2 border-basic-blue\"
            aria-label=\"Save\"
          >
            <img src=\"../images/svg/save-grey.svg\" alt=\"Save\">

            Save
          </button>
          <button
            class=\"flex published items-center text-base font-semibold md-max:text-[12px] px-4 py-[9px] rounded-full gap-2 bg-btn bg-basic-blue text-white disabled active\"
            aria-label=\"Publish assets\"
          >
            <img src=\"../images/svg/upload-black.svg\" alt=\"Save\">

            Publish assets
          </button>
        </div>
      </div>
    </div>", "partials/navbar.twig", "/var/www/html/templates/partials/navbar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 9];
        static $functions = ["asset" => 46];

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
