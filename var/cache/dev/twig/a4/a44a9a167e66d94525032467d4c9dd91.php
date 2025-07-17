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

/* partials/sidebar.twig */
class __TwigTemplate_c4b8cf57ad8bf2c3ce9ea73f38af6a28 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.twig"));

        // line 1
        yield "
    <!-- Navigation sidebar start-->
    <aside
      class=\"fixed top-0 left-0 h-[100dvh] bg-white flex flex-col justify-between items-center z-[999] pt-8 space-y-6\"
      style=\"box-shadow: 1px 3px 10px rgb(0, 0, 0, 0.2)\"
      id=\"aside-nav\"
      aria-label=\"Sidebar navigation\" >
      <div class=\"space-y-6\">
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Home\"
          id=\"home\"
          href=\"?tab=home\"
        >
          <div class=\"\">
            <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/home-white.svg"), "html", null, true);
        yield "\" alt=\"Home\">
          </div>
          <span class=\"text-xs font-semibold\">HOME</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Assets\"
          id=\"assets\"
          href=\"?tab=assets\"
        >
          <div class=\"\">
            <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/assets-black.svg"), "html", null, true);
        yield "\" alt=\"Assets\">
          </div>
          <span class=\"text-xs font-semibold\">ASSETS</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Packages\"
          id=\"packages\"
          href=\"?tab=packages\"
        >
          <div class=\"\">
            <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/packages-black.svg"), "html", null, true);
        yield "\" alt=\"Packages\">
          </div>
          <span class=\"text-xs font-semibold\">PACKAGES</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Collections\"
          id=\"collections\"
          href=\"?tab=collections\"
        >
          <div class=\"\">
            <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/collections-black.svg"), "html", null, true);
        yield "\" alt=\"share\">
          </div>
          <span class=\"text-xs font-semibold\">COLLECTIONS</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Branding\"
          id=\"branding\"
          href=\"?tab=branding\"
        >
          <div class=\"\">
            <img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/branding-black.svg"), "html", null, true);
        yield "\" alt=\"Branding\">
          </div>
          <span class=\"text-xs font-semibold\">BRANDING</span>
        </a>
      </div>
      <div class=\"mt-auto\"></div>
      <div class=\"space-y-[1px] w-36\">
        <a
          class=\"sidebar-bottom-icon pl-4 pr-6 py-5 flex items-center justify-center space-x-3 bg-tints-blue hover:bg-accent-blue hover:transition hover:duration-300 hover:ease-in-out\"
          aria-label=\"Upload\"
          id=\"upload\"
          href=\"?tab=upload\"
        >
          <img src=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/upload-black.svg"), "html", null, true);
        yield "\" alt=\"share\">
          <span class=\"text-[14px] font-semibold\">UPLOAD</span>
        </a>
        <a
          class=\"sidebar-bottom-icon pl-4 pr-6 py-5 flex items-center justify-center space-x-3 bg-tints-blue hover:bg-accent-blue hover:transition hover:duration-300 hover:ease-in-out\"
          aria-label=\"account\"
          id=\"account\"
          href=\"?tab=account\" 
        >
          <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/svg/account-black.svg"), "html", null, true);
        yield "\" alt=\"Account\">

          <span class=\"text-[14px] font-semibold\">ACCOUNT</span>
        </a>

        <a
          class=\"pl-4 pr-6 py-5 flex items-center justify-center space-x-3 bg-tints-blue hover:bg-accent-blue\"
          href=\"../index.html\"
          aria-label=\"Logout\"
        >
          <img src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logout.svg"), "html", null, true);
        yield "\" alt=\"\" class=\"h-6\" />
          <span class=\"text-[14px] font-semibold\">LOGOUT</span>
        </a>
      </div>
    </aside>
    <!-- Navigation sidebar end-->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/sidebar.twig";
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
        return array (  164 => 92,  151 => 82,  139 => 73,  123 => 60,  109 => 49,  95 => 38,  81 => 27,  67 => 16,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
    <!-- Navigation sidebar start-->
    <aside
      class=\"fixed top-0 left-0 h-[100dvh] bg-white flex flex-col justify-between items-center z-[999] pt-8 space-y-6\"
      style=\"box-shadow: 1px 3px 10px rgb(0, 0, 0, 0.2)\"
      id=\"aside-nav\"
      aria-label=\"Sidebar navigation\" >
      <div class=\"space-y-6\">
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Home\"
          id=\"home\"
          href=\"?tab=home\"
        >
          <div class=\"\">
            <img src=\"{{ asset('build/images/svg/home-white.svg') }}\" alt=\"Home\">
          </div>
          <span class=\"text-xs font-semibold\">HOME</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Assets\"
          id=\"assets\"
          href=\"?tab=assets\"
        >
          <div class=\"\">
            <img src=\"{{ asset('build/images/svg/assets-black.svg') }}\" alt=\"Assets\">
          </div>
          <span class=\"text-xs font-semibold\">ASSETS</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Packages\"
          id=\"packages\"
          href=\"?tab=packages\"
        >
          <div class=\"\">
            <img src=\"{{ asset('build/images/svg/packages-black.svg') }}\" alt=\"Packages\">
          </div>
          <span class=\"text-xs font-semibold\">PACKAGES</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Collections\"
          id=\"collections\"
          href=\"?tab=collections\"
        >
          <div class=\"\">
            <img src=\"{{ asset('build/images/svg/collections-black.svg') }}\" alt=\"share\">
          </div>
          <span class=\"text-xs font-semibold\">COLLECTIONS</span>
        </a>
        <a
          class=\"sidebar-icon px-7 pt-5 pb-3 flex flex-col items-center justify-center space-y-3 bg-tints-of-blue rounded-xl hover:transition hover:duration-300 hover:ease-in-out hover:shadow-2xl\"
          aria-label=\"Branding\"
          id=\"branding\"
          href=\"?tab=branding\"
        >
          <div class=\"\">
            <img src=\"{{ asset('build/images/svg/branding-black.svg') }}\" alt=\"Branding\">
          </div>
          <span class=\"text-xs font-semibold\">BRANDING</span>
        </a>
      </div>
      <div class=\"mt-auto\"></div>
      <div class=\"space-y-[1px] w-36\">
        <a
          class=\"sidebar-bottom-icon pl-4 pr-6 py-5 flex items-center justify-center space-x-3 bg-tints-blue hover:bg-accent-blue hover:transition hover:duration-300 hover:ease-in-out\"
          aria-label=\"Upload\"
          id=\"upload\"
          href=\"?tab=upload\"
        >
          <img src=\"{{ asset('build/images/svg/upload-black.svg') }}\" alt=\"share\">
          <span class=\"text-[14px] font-semibold\">UPLOAD</span>
        </a>
        <a
          class=\"sidebar-bottom-icon pl-4 pr-6 py-5 flex items-center justify-center space-x-3 bg-tints-blue hover:bg-accent-blue hover:transition hover:duration-300 hover:ease-in-out\"
          aria-label=\"account\"
          id=\"account\"
          href=\"?tab=account\" 
        >
          <img src=\"{{ asset('build/images/svg/account-black.svg') }}\" alt=\"Account\">

          <span class=\"text-[14px] font-semibold\">ACCOUNT</span>
        </a>

        <a
          class=\"pl-4 pr-6 py-5 flex items-center justify-center space-x-3 bg-tints-blue hover:bg-accent-blue\"
          href=\"../index.html\"
          aria-label=\"Logout\"
        >
          <img src=\"{{ asset('build/images/logout.svg') }}\" alt=\"\" class=\"h-6\" />
          <span class=\"text-[14px] font-semibold\">LOGOUT</span>
        </a>
      </div>
    </aside>
    <!-- Navigation sidebar end-->", "partials/sidebar.twig", "/var/www/html/templates/partials/sidebar.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 16];
        static $functions = ["asset" => 16];

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
