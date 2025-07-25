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

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_12a2dcab176727816a8509bfa4cdc615 extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <div class=\"container\">
        ";
        // line 5
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", ["profile_type" => $this->sandbox->ensureToStringAllowed((isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 5, $this->source); })()), 5, $this->source)], false);
        yield "

        <div id=\"summary\">
        ";
        // line 8
        yield from $this->unwrap()->yieldBlock('summary', $context, $blocks);
        // line 21
        yield "    </div>

        <div id=\"content\">
            <div id=\"main\">
                <div id=\"sidebar\">
                    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 71
        yield "                </div>

                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        yield "
                        ";
        // line 76
        yield from $this->unwrap()->yieldBlock('panel', $context, $blocks);
        // line 77
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_summary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 9
        yield "            ";
        if (array_key_exists("profile", $context)) {
            // line 10
            yield "                ";
            $context["request_collector"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, true, 10), "request", [], "any", true, true, true, 10)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 10, $this->source); })()), "collectors", [], "any", false, false, true, 10), "request", [], "any", false, false, true, 10), 10, $this->source), false)) : (false));
            // line 11
            yield "
                ";
            // line 12
            yield Twig\Extension\CoreExtension::include($this->env, $context, Twig\Extension\CoreExtension::sprintf("@WebProfiler/Profiler/_%s_summary.html.twig", $this->sandbox->ensureToStringAllowed((isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 12, $this->source); })()), 12, $this->source)), ["profile" => $this->sandbox->ensureToStringAllowed(            // line 13
(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 13, $this->source); })()), 13, $this->source), "command_collector" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 14
($context["profile"] ?? null), "collectors", [], "any", false, true, true, 14), "command", [], "any", true, true, true, 14)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 14, $this->source); })()), "collectors", [], "any", false, false, true, 14), "command", [], "any", false, false, true, 14), 14, $this->source), false)) : (false)), "request_collector" => $this->sandbox->ensureToStringAllowed(            // line 15
(isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 15, $this->source); })()), 15, $this->source), "request" => $this->sandbox->ensureToStringAllowed(            // line 16
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 16, $this->source); })()), 16, $this->source), "token" => $this->sandbox->ensureToStringAllowed(            // line 17
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 17, $this->source); })()), 17, $this->source)], false);
            // line 18
            yield "
            ";
        }
        // line 20
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 27
        yield "                        <div id=\"sidebar-contents\">
                            <div id=\"sidebar-shortcuts\">
                                ";
        // line 29
        yield from $this->unwrap()->yieldBlock('sidebar_shortcuts_links', $context, $blocks);
        // line 39
        yield "
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("web_profiler.controller.profiler::searchBarAction", [], Twig\Extension\CoreExtension::merge(["type" => $this->sandbox->ensureToStringAllowed((isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 40, $this->source); })()), 40, $this->source)], $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 40, $this->source); })()), "query", [], "any", false, false, true, 40), "all", [], "any", false, false, true, 40), 40, $this->source))));
        yield "
                            </div>

                            ";
        // line 43
        if (array_key_exists("templates", $context)) {
            // line 44
            yield "                                <ul id=\"menu-profiler\">
                                    ";
            // line 45
            if (("request" === (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 45, $this->source); })()))) {
                // line 46
                yield "                                        ";
                $context["excludes"] = ["command"];
                // line 47
                yield "                                    ";
            } elseif (("command" === (isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 47, $this->source); })()))) {
                // line 48
                yield "                                        ";
                $context["excludes"] = ["request", "router"];
                // line 49
                yield "                                    ";
            }
            // line 50
            yield "
                                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, (isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 51, $this->source); })()), function ($__t__, $__n__) use ($context, $macros) { $context["t"] = $__t__; $context["n"] = $__n__; return !CoreExtension::inFilter((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 51, $this->source); })()), (isset($context["excludes"]) || array_key_exists("excludes", $context) ? $context["excludes"] : (function () { throw new RuntimeError('Variable "excludes" does not exist.', 51, $this->source); })())); }));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 52
                yield "                                        ";
                $context["menu"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 53
                    if (                    $this->load($context["template"], 53)->unwrap()->hasBlock("menu", $context)) {
                        // line 54
                        $_v0 = $context;
                        $_v1 = ["collector" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 54, $this->source); })()), "getcollector", [$context["name"]], "method", false, false, true, 54), "profiler_markup_version" => (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 54, $this->source); })())];
                        if (!is_iterable($_v1)) {
                            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 54, $this->getSourceContext());
                        }
                        $_v1 = CoreExtension::toArray($_v1);
                        $context = $_v1 + $context + $this->env->getGlobals();
                        // line 55
                        yield from                         $this->load($context["template"], 55)->unwrap()->yieldBlock("menu", $context);
                        $context = $_v0;
                    }
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 59
                yield "                                        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 59, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "                                            <li class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["name"], 60, $this->source), "html", null, true);
                    yield " ";
                    yield ((($context["name"] == (isset($context["panel"]) || array_key_exists("panel", $context) ? $context["panel"] : (function () { throw new RuntimeError('Variable "panel" does not exist.', 60, $this->source); })()))) ? ("selected") : (""));
                    yield "\">
                                                <a href=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => $this->sandbox->ensureToStringAllowed((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 61, $this->source); })()), 61, $this->source), "panel" => $this->sandbox->ensureToStringAllowed($context["name"], 61, $this->source), "type" => $this->sandbox->ensureToStringAllowed((isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 61, $this->source); })()), 61, $this->source)]), "html", null, true);
                    yield "\">";
                    yield $this->sandbox->ensureToStringAllowed((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 61, $this->source); })()), 61, $this->source);
                    yield "</a>
                                            </li>
                                        ";
                }
                // line 64
                yield "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                                </ul>
                            ";
        }
        // line 67
        yield "                        </div>

                        ";
        // line 69
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/settings.html.twig");
        yield "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_shortcuts_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        // line 30
        yield "                                    <div class=\"shortcuts\">
                                        <a class=\"btn btn-link\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search", ["limit" => 10, "type" => $this->sandbox->ensureToStringAllowed((isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 31, $this->source); })()), 31, $this->source)]), "html", null, true);
        yield "\">Last 10</a>
                                        <a class=\"btn btn-link\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", Twig\Extension\CoreExtension::merge(["token" => "latest", "type" => $this->sandbox->ensureToStringAllowed((isset($context["profile_type"]) || array_key_exists("profile_type", $context) ? $context["profile_type"] : (function () { throw new RuntimeError('Variable "profile_type" does not exist.', 32, $this->source); })()), 32, $this->source)], $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 32, $this->source); })()), "query", [], "any", false, false, true, 32), "all", [], "any", false, false, true, 32), 32, $this->source))), "html", null, true);
        yield "\">Latest</a>

                                        <a class=\"sf-toggle btn btn-link\" data-toggle-selector=\"#sidebar-search\" ";
        // line 34
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            yield "data-toggle-initial=\"display\"";
        }
        yield ">
                                            ";
        // line 35
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/search.svg");
        yield " <span class=\"hidden-small\">Search</span>
                                        </a>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        yield "";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/layout.html.twig";
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
        return array (  359 => 76,  344 => 35,  338 => 34,  333 => 32,  329 => 31,  326 => 30,  313 => 29,  300 => 69,  296 => 67,  292 => 65,  278 => 64,  270 => 61,  263 => 60,  260 => 59,  254 => 55,  246 => 54,  244 => 53,  241 => 52,  224 => 51,  221 => 50,  218 => 49,  215 => 48,  212 => 47,  209 => 46,  207 => 45,  204 => 44,  202 => 43,  196 => 40,  193 => 39,  191 => 29,  187 => 27,  174 => 26,  163 => 20,  159 => 18,  157 => 17,  156 => 16,  155 => 15,  154 => 14,  153 => 13,  152 => 12,  149 => 11,  146 => 10,  143 => 9,  130 => 8,  114 => 77,  112 => 76,  108 => 75,  102 => 71,  100 => 26,  93 => 21,  91 => 8,  85 => 5,  82 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    <div class=\"container\">
        {{ include('@WebProfiler/Profiler/header.html.twig', {profile_type: profile_type}, with_context = false) }}

        <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set request_collector = profile.collectors.request|default(false) %}

                {{ include('@WebProfiler/Profiler/_%s_summary.html.twig'|format(profile_type), {
                    profile: profile,
                    command_collector: profile.collectors.command|default(false) ,
                    request_collector: request_collector,
                    request: request,
                    token: token
                }, with_context=false) }}
            {% endif %}
        {% endblock %}
    </div>

        <div id=\"content\">
            <div id=\"main\">
                <div id=\"sidebar\">
                    {% block sidebar %}
                        <div id=\"sidebar-contents\">
                            <div id=\"sidebar-shortcuts\">
                                {% block sidebar_shortcuts_links %}
                                    <div class=\"shortcuts\">
                                        <a class=\"btn btn-link\" href=\"{{ path('_profiler_search', { limit: 10, type: profile_type }) }}\">Last 10</a>
                                        <a class=\"btn btn-link\" href=\"{{ path('_profiler', { token: 'latest', type: profile_type }|merge(request.query.all)) }}\">Latest</a>

                                        <a class=\"sf-toggle btn btn-link\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                                            {{ source('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                                        </a>
                                    </div>
                                {% endblock sidebar_shortcuts_links %}

                                {{ render(controller('web_profiler.controller.profiler::searchBarAction', query={type: profile_type }|merge(request.query.all))) }}
                            </div>

                            {% if templates is defined %}
                                <ul id=\"menu-profiler\">
                                    {% if 'request' is same as(profile_type) %}
                                        {% set excludes = ['command'] %}
                                    {% elseif 'command' is same as(profile_type) %}
                                        {% set excludes = ['request', 'router'] %}
                                    {% endif %}

                                    {% for name, template in templates|filter((t, n) => n not in excludes) %}
                                        {% set menu -%}
                                            {%- if block('menu', template) is defined -%}
                                                {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                                    {{- block('menu', template) -}}
                                                {% endwith %}
                                            {%- endif -%}
                                        {%- endset %}
                                        {% if menu is not empty %}
                                            <li class=\"{{ name }} {{ name == panel ? 'selected' }}\">
                                                <a href=\"{{ path('_profiler', { token: token, panel: name, type: profile_type }) }}\">{{ menu|raw }}</a>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </div>

                        {{ include('@WebProfiler/Profiler/settings.html.twig') }}
                    {% endblock sidebar %}
                </div>

                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                        {% block panel '' %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "block" => 8, "if" => 9, "set" => 10, "for" => 51, "with" => 54];
        static $filters = ["default" => 10, "format" => 12, "merge" => 40, "filter" => 51, "escape" => 60, "raw" => 61];
        static $functions = ["include" => 5, "render" => 40, "controller" => 40, "path" => 61, "source" => 35];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'block', 'if', 'set', 'for', 'with'],
                ['default', 'format', 'merge', 'filter', 'escape', 'raw'],
                ['include', 'render', 'controller', 'path', 'source'],
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
