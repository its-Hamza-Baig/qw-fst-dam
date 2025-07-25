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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_4e1014a98410316f4cbb3522c2b9188c extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        :root {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #555;
        }
        .theme-dark {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #ccc;
        }

        .log-filters {
            display: flex;
            flex-wrap: wrap;
        }
        .log-filters .log-filter {
            flex-shrink: 0;
            margin-right: 15px;
            position: relative;
        }
        .log-filters .log-filter summary {
            align-items: center;
            background: var(--button-background);
            border-radius: 6px;
            border: 1px solid var(--button-border-color);
            box-shadow: var(--button-box-shadow);
            color: var(--button-color);
            cursor: pointer;
            display: flex;
            font-size: 13px;
            font-weight: 500;
            padding: 4px 8px;
            white-space: nowrap;
        }
        .log-filters .log-filter summary:active {
            box-shadow: none;
            transform: translateY(1px);
        }
        .log-filters .log-filter summary .icon {
            height: 18px;
            width: 18px;
            margin: 0 7px 0 0;
        }
        .log-filters .log-filter summary svg {
            height: 18px;
            width: 18px;
            opacity: 0.7;
        }
        .log-filters .log-filter summary svg {
            stroke-width: 2;
        }
        .log-filters .log-filter summary .filter-active-num {
            color: var(--log-filter-active-num-color);
            font-weight: bold;
            padding: 0 1px;
        }
        .log-filter .tab-navigation {
            position: relative;
        }
        .log-filter .tab-navigation input[type=\"radio\"] {
            position: absolute;
            pointer-events: none;
            opacity: 0;
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            background-color: var(--tab-active-background);
            border-radius: 6px;
            box-shadow: inset 0 0 0 1.5px var(--tab-active-border-color);
            color: var(--tab-active-color);
            position: relative;
            z-index: 1;
        }
        .theme-dark .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            box-shadow: inset 0 0 0 1px var(--tab-border-color);
        }
        .tab-navigation input[type=\"radio\"]:focus-visible + .tab-control {
            outline: 1px solid var(--color-link);
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control + input[type=\"radio\"] + .tab-control:before{
            width: 0;
        }

        .log-filters .log-filter .log-filter-content {
            background: var(--base-0);
            border: 1px solid var(--table-border-color);
            border-radius: 6px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 15px;
            position: absolute;
            left: 0;
            top: 32px;
            max-width: 400px;
            min-width: 200px;
            z-index: 9999;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option {
            align-items: center;
            display: flex;
        }
        .log-filter .filter-select-all-or-none {
            margin-bottom: 10px;
        }
        .log-filter .filter-select-all-or-none button + button {
            margin-left: 15px;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option + .log-filter-option {
            margin: 7px 0 0;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option label {
            cursor: pointer;
            flex: 1;
            padding-left: 10px;
        }

        table.logs {
            border-bottom-width: 0;
            border-collapse: collapse;
        }
        table.logs tr + tr td {
            border-width: 1px 0 0;
        }
        table.logs .metadata {
            display: block;
            font-size: 12px;
        }
        .theme-dark tr.status-error td,
        .theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

        table.logs .log-timestamp {
            color: var(--log-timestamp-color);
        }
        table.logs .log-metadata {
            margin: 8px 0 0;
        }
        table.logs .log-metadata > span {
            display: inline-block;
        }
        table.logs .log-metadata > span + span {
            margin-left: 10px;
        }
        table.logs .log-metadata .log-channel {
            color: var(--base-1);
            font-size: 13px;
            font-weight: bold;
        }
        table.logs .log-metadata .badge {
            background: var(--badge-light-background);
            color: var(--badge-light-color);
        }
        table.logs .log-metadata .log-num-occurrences {
            color: var(--color-muted);
            font-size: 13px;
        }
        table.logs .log-metadata .context {
            background: var(--code-block-background);
            border-radius: 4px;
            padding: 5px;
        }
        table.logs .log-metadata .context + .context {
            margin-top: 10px;
        }
        .log-type-badge {
            background: var(--badge-light-background);
            box-shadow: none;
            color: var(--badge-light-color);
            display: inline-block;
            font-family: var(--font-family-system);
            margin-top: 5px;
        }
        .log-type-badge.badge-deprecation,
        .log-type-badge.badge-warning {
            background: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .log-type-badge.badge-error {
            background: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .log-type-badge.badge-silenced {
            background: #EDE9FE;
            color: #6D28D9;
        }
        .theme-dark .log-type-badge.badge-silenced {
            background: #5B21B6;
            color: #EDE9FE;
        }

        tr.log-status-warning > td:first-child,
        tr.log-status-error > td:first-child,
        tr.log-status-silenced > td:first-child {
            position: relative;
        }
        tr.log-status-warning > td:first-child:before,
        tr.log-status-error > td:first-child:before,
        tr.log-status-silenced > td:first-child:before {
            background: transparent;
            border-radius: 0;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
        }
        tr.log-status-warning > td:first-child:before {
            background: var(--yellow-400);
        }
        tr.log-status-error > td:first-child:before {
            background: var(--red-400);
        }
        tr.log-status-silenced > td:first-child:before {
            background: #a78bfa;
        }

        .container-compilation-logs {
            background: var(--table-background);
            border: 1px solid var(--base-2);
            border-radius: 6px;
            margin-top: 30px;
            padding: 15px;
        }
        .container-compilation-logs summary {
            cursor: pointer;
        }
        .container-compilation-logs summary h4 {
            margin: 0 0 5px;
        }
        .container-compilation-logs summary p {
            margin: 0;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 239
        yield "    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerLoggerPanel();
        });

        class SymfonyProfilerLoggerPanel {
            constructor() {
                this.#initializeLogsTable();
            }

            #initializeLogsTable() {
                this.#updateLogsTable();

                document.querySelectorAll('.log-filter input').forEach((input) => {
                    input.addEventListener('change', () => { this.#updateLogsTable(); });
                });

                document.querySelectorAll('.filter-select-all-or-none button').forEach((link) => {
                    link.addEventListener('click', () => {
                        const selectAll = link.classList.contains('select-all');
                        link.closest('.log-filter-content').querySelectorAll('input').forEach((input) => {
                            input.checked = selectAll;
                        });

                        this.#updateLogsTable();
                    });
                });

                document.body.addEventListener('click', (event) => {
                    document.querySelectorAll('details.log-filter').forEach((filterElement) => {
                        if (!filterElement.contains(event.target) && filterElement.open) {
                            filterElement.open = false;
                        }
                    });
                });
            }

            #updateLogsTable() {
                const logs = document.querySelector('table.logs');
                if (null === logs) {
                    return;
                }

                const selectedType = document.querySelector('#log-filter-type input:checked').value;
                const priorities = document.querySelectorAll('#log-filter-priority input');
                const allPriorities = Array.from(priorities).map((input) => input.value);
                const selectedPriorities = Array.from(priorities).filter((input) => input.checked).map((input) => input.value);
                const channels = document.querySelectorAll('#log-filter-channel input');
                const selectedChannels = Array.from(channels).filter((input) => input.checked).map((input) => input.value);

                /* hide rows that don't match the current filters */
                let numVisibleRows = 0;
                logs.querySelectorAll('tbody tr').forEach((row) => {
                    if ('all' !== selectedType && selectedType !== row.getAttribute('data-type')) {
                        row.style.display = 'none';
                        return;
                    }

                    const priority = row.getAttribute('data-priority');
                    if (false === selectedPriorities.includes(priority) && true === allPriorities.includes(priority)) {
                        row.style.display = 'none';
                        return;
                    }

                    if ('' !== row.getAttribute('data-channel') && false === selectedChannels.includes(row.getAttribute('data-channel'))) {
                        row.style.display = 'none';
                        return;
                    }

                    row.style.display = 'table-row';
                    numVisibleRows++;
                });

                document.querySelector('table.logs').style.display = 0 === numVisibleRows ? 'none' : 'table';
                document.querySelector('.no-logs-message').style.display = 0 === numVisibleRows ? 'block' : 'none';

                /* update the selected totals of all filters */
                document.querySelector('#log-filter-priority .filter-active-num').innerText = (priorities.length === selectedPriorities.length) ? 'All' : selectedPriorities.length;
                document.querySelector('#log-filter-channel .filter-active-num').innerText = (channels.length === selectedChannels.length) ? 'All' : selectedChannels.length;
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 323
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 324
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 324, $this->source); })()), "counterrors", [], "any", false, false, true, 324) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 324, $this->source); })()), "countdeprecations", [], "any", false, false, true, 324)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 324, $this->source); })()), "countwarnings", [], "any", false, false, true, 324))) {
            // line 325
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 326
                yield "            ";
                $context["status_color"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 326, $this->source); })()), "counterrors", [], "any", false, false, true, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 326, $this->source); })()), "countwarnings", [], "any", false, false, true, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yellow") : ("none"))));
                // line 327
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/logger.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 328
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 328, $this->source); })()), "counterrors", [], "any", false, false, true, 328)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 328, $this->source); })()), "counterrors", [], "any", false, false, true, 328), 328, $this->source), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 328, $this->source); })()), "countdeprecations", [], "any", false, false, true, 328) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 328, $this->source); })()), "countwarnings", [], "any", false, false, true, 328)), "html", null, true)));
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 330
            yield "
        ";
            // line 331
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 332
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 334
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 334, $this->source); })()), "counterrors", [], "any", false, false, true, 334)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, true, 334)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 334, $this->source); })()), "counterrors", [], "any", false, false, true, 334), 334, $this->source), 0)) : (0)), "html", null, true);
                yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 339
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 339, $this->source); })()), "countwarnings", [], "any", false, false, true, 339)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("yellow") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, true, 339)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 339, $this->source); })()), "countwarnings", [], "any", false, false, true, 339), 339, $this->source), 0)) : (0)), "html", null, true);
                yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 344
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 344, $this->source); })()), "countdeprecations", [], "any", false, false, true, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("none") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, true, 344)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 344, $this->source); })()), "countdeprecations", [], "any", false, false, true, 344), 344, $this->source), 0)) : (0)), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 347
            yield "
        ";
            // line 348
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => $this->sandbox->ensureToStringAllowed((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 348, $this->source); })()), 348, $this->source), "status" => $this->sandbox->ensureToStringAllowed((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 348, $this->source); })()), 348, $this->source)]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 352
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 353
        yield "    <span class=\"label label-status-";
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "counterrors", [], "any", false, false, true, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "countwarnings", [], "any", false, false, true, 353)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : ("none"))));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "logs", [], "any", false, false, true, 353))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 354
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/logger.svg");
        yield "</span>
        <strong>Logs</strong>
        ";
        // line 356
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 356, $this->source); })()), "counterrors", [], "any", false, false, true, 356) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 356, $this->source); })()), "countdeprecations", [], "any", false, false, true, 356)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 356, $this->source); })()), "countwarnings", [], "any", false, false, true, 356))) {
            // line 357
            yield "            <span class=\"count\">
                <span>";
            // line 358
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "counterrors", [], "any", false, false, true, 358)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "counterrors", [], "any", false, false, true, 358), 358, $this->source), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "countdeprecations", [], "any", false, false, true, 358) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 358, $this->source); })()), "countwarnings", [], "any", false, false, true, 358)), "html", null, true)));
            yield "</span>
            </span>
        ";
        }
        // line 361
        yield "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 364
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

        // line 365
        yield "    <h2>Log Messages</h2>

    ";
        // line 367
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 367, $this->source); })()), "processedLogs", [], "any", false, false, true, 367))) {
            // line 368
            yield "        <div class=\"empty empty-panel\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 372
            yield "        ";
            $context["has_error_logs"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::column($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 372, $this->source); })()), "processedLogs", [], "any", false, false, true, 372), 372, $this->source), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("error" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 372, $this->source); })())); })) > 0);
            // line 373
            yield "        ";
            $context["has_deprecation_logs"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, Twig\Extension\CoreExtension::column($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 373, $this->source); })()), "processedLogs", [], "any", false, false, true, 373), 373, $this->source), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("deprecation" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 373, $this->source); })())); })) > 0);
            // line 374
            yield "
        ";
            // line 375
            $context["filters"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 375, $this->source); })()), "filters", [], "any", false, false, true, 375);
            // line 376
            yield "        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <div class=\"tab-navigation\">
                    ";
            // line 379
            $context["initially_active_tab"] = (((($tmp = (isset($context["has_error_logs"]) || array_key_exists("has_error_logs", $context) ? $context["has_error_logs"] : (function () { throw new RuntimeError('Variable "has_error_logs" does not exist.', 379, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : ((((($tmp = (isset($context["has_deprecation_logs"]) || array_key_exists("has_deprecation_logs", $context) ? $context["has_deprecation_logs"] : (function () { throw new RuntimeError('Variable "has_deprecation_logs" does not exist.', 379, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("deprecation") : ("all"))));
            // line 380
            yield "                    <input type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\" ";
            yield ((("all" == (isset($context["initially_active_tab"]) || array_key_exists("initially_active_tab", $context) ? $context["initially_active_tab"] : (function () { throw new RuntimeError('Variable "initially_active_tab" does not exist.', 380, $this->source); })()))) ? ("checked") : (""));
            yield ">
                    <label for=\"filter-log-type-all\" class=\"tab-control\">
                        All messages
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\" ";
            // line 385
            yield ((("error" == (isset($context["initially_active_tab"]) || array_key_exists("initially_active_tab", $context) ? $context["initially_active_tab"] : (function () { throw new RuntimeError('Variable "initially_active_tab" does not exist.', 385, $this->source); })()))) ? ("checked") : (""));
            yield ">
                    <label for=\"filter-log-type-error\" class=\"tab-control\">
                        Errors
                        <span class=\"badge status-";
            // line 388
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 388, $this->source); })()), "counterrors", [], "any", false, false, true, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("error") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, true, 388)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 388, $this->source); })()), "counterrors", [], "any", false, false, true, 388), 388, $this->source), 0)) : (0)), "html", null, true);
            yield "</span>
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\" ";
            // line 391
            yield ((("deprecation" == (isset($context["initially_active_tab"]) || array_key_exists("initially_active_tab", $context) ? $context["initially_active_tab"] : (function () { throw new RuntimeError('Variable "initially_active_tab" does not exist.', 391, $this->source); })()))) ? ("checked") : (""));
            yield ">
                    <label for=\"filter-log-type-deprecation\" class=\"tab-control\">
                        Deprecations
                        <span class=\"badge status-";
            // line 394
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 394, $this->source); })()), "countdeprecations", [], "any", false, false, true, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("warning") : (""));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, true, 394)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 394, $this->source); })()), "countdeprecations", [], "any", false, false, true, 394), 394, $this->source), 0)) : (0)), "html", null, true);
            yield "</span>
                    </label>
                </div>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 401
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/filter.svg");
            yield "</span>
                    Level (<span class=\"filter-active-num\">";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 402, $this->source); })()), "priority", [], "any", false, false, true, 402), 402, $this->source)) - 1), "html", null, true);
            yield "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 411
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 411, $this->source); })()), "priority", [], "any", false, false, true, 411));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 412
                yield "                        <div class=\"log-filter-option\">
                            <input ";
                // line 413
                yield ((("debug" != $context["value"])) ? ("checked") : (""));
                yield " type=\"checkbox\" id=\"filter-log-level-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 413, $this->source), "html", null, true);
                yield "\" name=\"filter-log-level-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 413, $this->source), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 413, $this->source), "html", null, true);
                yield "\">
                            <label for=\"filter-log-level-";
                // line 414
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 414, $this->source), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["label"], 414, $this->source), "html", null, true);
                yield "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 417
            yield "                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 422
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/filter.svg");
            yield "</span>
                    Channel (<span class=\"filter-active-num\">";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 423, $this->source); })()), "channel", [], "any", false, false, true, 423), 423, $this->source)) - 1), "html", null, true);
            yield "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 432
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filters"]) || array_key_exists("filters", $context) ? $context["filters"] : (function () { throw new RuntimeError('Variable "filters" does not exist.', 432, $this->source); })()), "channel", [], "any", false, false, true, 432));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 433
                yield "                        <div class=\"log-filter-option\">
                            <input ";
                // line 434
                yield ((("event" != $context["value"])) ? ("checked") : (""));
                yield " type=\"checkbox\" id=\"filter-log-channel-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 434, $this->source), "html", null, true);
                yield "\" name=\"filter-log-channel-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 434, $this->source), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 434, $this->source), "html", null, true);
                yield "\">
                            <label for=\"filter-log-channel-";
                // line 435
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["value"], 435, $this->source), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["value"], 435, $this->source)), "html", null, true);
                yield "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 438
            yield "                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col style=\"width: 140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 456
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 456, $this->source); })()), "processedLogs", [], "any", false, false, true, 456));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 457
                yield "                    ";
                $context["css_class"] = ((("error" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 457))) ? ("error") : (((((CoreExtension::getAttribute($this->env, $this->source,                 // line 458
$context["log"], "priorityName", [], "any", false, false, true, 458) == "WARNING") || ("deprecation" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 458)))) ? ("warning") : (((("silenced" == CoreExtension::getAttribute($this->env, $this->source,                 // line 459
$context["log"], "type", [], "any", false, false, true, 459))) ? ("silenced") : (""))))));
                // line 461
                yield "                    <tr class=\"log-status-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 461, $this->source); })()), 461, $this->source), "html", null, true);
                yield "\" data-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                yield "\" data-priority=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                yield "\" data-channel=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, true, 461), 461, $this->source), "html", null, true);
                yield "\" style=\"";
                yield (((("event" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, true, 461)) || ("DEBUG" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 461)))) ? ("display: none") : (""));
                yield "\">
                        <td class=\"log-timestamp\">
                            <time class=\"newline\" title=\"";
                // line 463
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, true, 463), 463, $this->source), "r"), "html", null, true);
                yield "\" datetime=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, true, 463), 463, $this->source), Twig\Extension\CoreExtension::constant("DateTimeInterface::RFC3339_EXTENDED")), "html", null, true);
                yield "\" data-convert-to-user-timezone data-render-as-time data-render-with-millisecond-precision>
                                ";
                // line 464
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, true, 464), 464, $this->source), "H:i:s.v"), "html", null, true);
                yield "
                            </time>

                            ";
                // line 467
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 467), ["error", "deprecation", "silenced"]) || ("WARNING" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 467)))) {
                    // line 468
                    yield "                                <span class=\"log-type-badge badge badge-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 468, $this->source); })()), 468, $this->source), "html", null, true);
                    yield "\">
                                    ";
                    // line 469
                    if ((("error" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 469)) || ("WARNING" == CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 469)))) {
                        // line 470
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 470), 470, $this->source)), "html", null, true);
                        yield "
                                    ";
                    } else {
                        // line 472
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, true, 472), 472, $this->source)), "html", null, true);
                        yield "
                                    ";
                    }
                    // line 474
                    yield "                                </span>
                            ";
                } else {
                    // line 476
                    yield "                                <span class=\"log-type-badge badge badge-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 476, $this->source); })()), 476, $this->source), "html", null, true);
                    yield "\">
                                    ";
                    // line 477
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, true, 477), 477, $this->source)), "html", null, true);
                    yield "
                                </span>
                            ";
                }
                // line 480
                yield "                        </td>

                        <td class=\"font-normal\">
                            ";
                // line 483
                yield $this->getTemplateForMacro("macro_render_log_message", $context, 483, $this->getSourceContext())->macro_render_log_message(...["debug", CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 483), $context["log"]]);
                yield "
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            yield "            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>
    ";
        }
        // line 494
        yield "
    ";
        // line 495
        $context["compilerLogTotal"] = Twig\Extension\CoreExtension::reduce($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 495, $this->source); })()), "compilerLogs", [], "any", false, false, true, 495), 495, $this->source), function ($__total__, $__logs__) use ($context, $macros) { $context["total"] = $__total__; $context["logs"] = $__logs__; return ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 495, $this->source); })()) + Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 495, $this->source); })()), 495, $this->source))); }, 0);
        // line 496
        yield "    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">(";
        // line 498
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["compilerLogTotal"]) || array_key_exists("compilerLogTotal", $context) ? $context["compilerLogTotal"] : (function () { throw new RuntimeError('Variable "compilerLogTotal" does not exist.', 498, $this->source); })()), 498, $this->source), "html", null, true);
        yield ")</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        ";
        // line 502
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 502, $this->source); })()), "compilerLogs", [], "any", false, false, true, 502))) {
            // line 503
            yield "            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        ";
        } else {
            // line 507
            yield "            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 516
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 516, $this->source); })()), "compilerLogs", [], "any", false, false, true, 516));
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
            foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                // line 517
                yield "                    <tr>
                        <td class=\"font-normal text-right\">";
                // line 518
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed($context["logs"], 518, $this->source)), "html", null, true);
                yield "</td>
                        <td class=\"font-normal\">
                            ";
                // line 520
                $context["context_id"] = ("context-compiler-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 520), 520, $this->source));
                // line 521
                yield "
                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                // line 522
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 522, $this->source); })()), 522, $this->source), "html", null, true);
                yield "\" data-toggle-alt-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["class"], 522, $this->source), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($context["class"], 522, $this->source), "html", null, true);
                yield "</button>

                            <div id=\"";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 524, $this->source); })()), 524, $this->source), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    ";
                // line 526
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["logs"]);
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 527
                    yield "                                        <li>";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, true, 527), 527, $this->source));
                    yield "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['log'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 529
                yield "                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 534
            yield "                </tbody>
            </table>
        ";
        }
        // line 537
        yield "    </details>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 540
    public function macro_render_log_message($category = null, $log_index = null, $log = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "category" => $category,
            "log_index" => $log_index,
            "log" => $log,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 541
            yield "    ";
            $context["has_context"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, true, 541) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 541, $this->source); })()), "context", [], "any", false, false, true, 541)));
            // line 542
            yield "    ";
            $context["has_trace"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, true, 542), "exception", [], "any", false, true, true, 542), "trace", [], "any", true, true, true, 542);
            // line 543
            yield "
    ";
            // line 544
            if ((($tmp =  !(isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 544, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 545
                yield "        ";
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 545, $this->source); })()), "message", [], "any", false, false, true, 545), 545, $this->source));
                yield "
    ";
            } else {
                // line 547
                yield "        ";
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 547, $this->source); })()), "message", [], "any", false, false, true, 547), 547, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 547, $this->source); })()), "context", [], "any", false, false, true, 547), 547, $this->source));
                yield "
    ";
            }
            // line 549
            yield "
    <div class=\"log-metadata\">
        ";
            // line 551
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 551, $this->source); })()), "channel", [], "any", false, false, true, 551)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 552
                yield "            <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 552, $this->source); })()), "channel", [], "any", false, false, true, 552), 552, $this->source), "html", null, true);
                yield "</span>
        ";
            }
            // line 554
            yield "
        ";
            // line 555
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", true, true, true, 555) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 555, $this->source); })()), "errorCount", [], "any", false, false, true, 555) > 1))) {
                // line 556
                yield "            <span class=\"log-num-occurrences\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 556, $this->source); })()), "errorCount", [], "any", false, false, true, 556), 556, $this->source), "html", null, true);
                yield " times</span>
        ";
            }
            // line 558
            yield "
        ";
            // line 559
            if ((($tmp = (isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 559, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 560
                yield "            ";
                $context["context_id"] = ((("context-" . $this->sandbox->ensureToStringAllowed((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 560, $this->source); })()), 560, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new RuntimeError('Variable "log_index" does not exist.', 560, $this->source); })()), 560, $this->source));
                // line 561
                yield "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 561, $this->source); })()), 561, $this->source), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        ";
            }
            // line 563
            yield "
        ";
            // line 564
            if ((($tmp = (isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new RuntimeError('Variable "has_trace" does not exist.', 564, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 565
                yield "            ";
                $context["trace_id"] = ((("trace-" . $this->sandbox->ensureToStringAllowed((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 565, $this->source); })()), 565, $this->source)) . "-") . $this->sandbox->ensureToStringAllowed((isset($context["log_index"]) || array_key_exists("log_index", $context) ? $context["log_index"] : (function () { throw new RuntimeError('Variable "log_index" does not exist.', 565, $this->source); })()), 565, $this->source));
                // line 566
                yield "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 566, $this->source); })()), 566, $this->source), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        ";
            }
            // line 568
            yield "
        ";
            // line 569
            if ((($tmp = (isset($context["has_context"]) || array_key_exists("has_context", $context) ? $context["has_context"] : (function () { throw new RuntimeError('Variable "has_context" does not exist.', 569, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 570
                yield "            <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["context_id"]) || array_key_exists("context_id", $context) ? $context["context_id"] : (function () { throw new RuntimeError('Variable "context_id" does not exist.', 570, $this->source); })()), 570, $this->source), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 571
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 571, $this->source); })()), "context", [], "any", false, false, true, 571), 571, $this->source), 1);
                yield "
            </div>
        ";
            }
            // line 574
            yield "
        ";
            // line 575
            if ((($tmp = (isset($context["has_trace"]) || array_key_exists("has_trace", $context) ? $context["has_trace"] : (function () { throw new RuntimeError('Variable "has_trace" does not exist.', 575, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 576
                yield "            <div id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed((isset($context["trace_id"]) || array_key_exists("trace_id", $context) ? $context["trace_id"] : (function () { throw new RuntimeError('Variable "trace_id" does not exist.', 576, $this->source); })()), 576, $this->source), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 577
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 577, $this->source); })()), "context", [], "any", false, false, true, 577), "exception", [], "any", false, false, true, 577), "trace", [], "any", false, false, true, 577), 577, $this->source), 1);
                yield "
            </div>
        ";
            }
            // line 580
            yield "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/logger.html.twig";
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
        return array (  1137 => 580,  1131 => 577,  1126 => 576,  1124 => 575,  1121 => 574,  1115 => 571,  1110 => 570,  1108 => 569,  1105 => 568,  1099 => 566,  1096 => 565,  1094 => 564,  1091 => 563,  1085 => 561,  1082 => 560,  1080 => 559,  1077 => 558,  1071 => 556,  1069 => 555,  1066 => 554,  1060 => 552,  1058 => 551,  1054 => 549,  1048 => 547,  1042 => 545,  1040 => 544,  1037 => 543,  1034 => 542,  1031 => 541,  1011 => 540,  999 => 537,  994 => 534,  976 => 529,  967 => 527,  963 => 526,  958 => 524,  949 => 522,  946 => 521,  944 => 520,  939 => 518,  936 => 517,  919 => 516,  908 => 507,  902 => 503,  900 => 502,  893 => 498,  889 => 496,  887 => 495,  884 => 494,  875 => 487,  857 => 483,  852 => 480,  846 => 477,  841 => 476,  837 => 474,  831 => 472,  825 => 470,  823 => 469,  818 => 468,  816 => 467,  810 => 464,  804 => 463,  790 => 461,  788 => 459,  787 => 458,  785 => 457,  768 => 456,  748 => 438,  737 => 435,  727 => 434,  724 => 433,  720 => 432,  708 => 423,  704 => 422,  697 => 417,  686 => 414,  676 => 413,  673 => 412,  669 => 411,  657 => 402,  653 => 401,  641 => 394,  635 => 391,  627 => 388,  621 => 385,  612 => 380,  610 => 379,  605 => 376,  603 => 375,  600 => 374,  597 => 373,  594 => 372,  588 => 368,  586 => 367,  582 => 365,  569 => 364,  557 => 361,  551 => 358,  548 => 357,  546 => 356,  541 => 354,  534 => 353,  521 => 352,  507 => 348,  504 => 347,  495 => 344,  485 => 339,  475 => 334,  471 => 332,  469 => 331,  466 => 330,  460 => 328,  455 => 327,  452 => 326,  449 => 325,  446 => 324,  433 => 323,  340 => 239,  327 => 238,  82 => 4,  69 => 3,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        :root {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #555;
        }
        .theme-dark {
            --log-filter-active-num-color: #2563EB;
            --log-timestamp-color: #ccc;
        }

        .log-filters {
            display: flex;
            flex-wrap: wrap;
        }
        .log-filters .log-filter {
            flex-shrink: 0;
            margin-right: 15px;
            position: relative;
        }
        .log-filters .log-filter summary {
            align-items: center;
            background: var(--button-background);
            border-radius: 6px;
            border: 1px solid var(--button-border-color);
            box-shadow: var(--button-box-shadow);
            color: var(--button-color);
            cursor: pointer;
            display: flex;
            font-size: 13px;
            font-weight: 500;
            padding: 4px 8px;
            white-space: nowrap;
        }
        .log-filters .log-filter summary:active {
            box-shadow: none;
            transform: translateY(1px);
        }
        .log-filters .log-filter summary .icon {
            height: 18px;
            width: 18px;
            margin: 0 7px 0 0;
        }
        .log-filters .log-filter summary svg {
            height: 18px;
            width: 18px;
            opacity: 0.7;
        }
        .log-filters .log-filter summary svg {
            stroke-width: 2;
        }
        .log-filters .log-filter summary .filter-active-num {
            color: var(--log-filter-active-num-color);
            font-weight: bold;
            padding: 0 1px;
        }
        .log-filter .tab-navigation {
            position: relative;
        }
        .log-filter .tab-navigation input[type=\"radio\"] {
            position: absolute;
            pointer-events: none;
            opacity: 0;
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            background-color: var(--tab-active-background);
            border-radius: 6px;
            box-shadow: inset 0 0 0 1.5px var(--tab-active-border-color);
            color: var(--tab-active-color);
            position: relative;
            z-index: 1;
        }
        .theme-dark .tab-navigation input[type=\"radio\"]:checked + .tab-control {
            box-shadow: inset 0 0 0 1px var(--tab-border-color);
        }
        .tab-navigation input[type=\"radio\"]:focus-visible + .tab-control {
            outline: 1px solid var(--color-link);
        }
        .tab-navigation input[type=\"radio\"]:checked + .tab-control + input[type=\"radio\"] + .tab-control:before{
            width: 0;
        }

        .log-filters .log-filter .log-filter-content {
            background: var(--base-0);
            border: 1px solid var(--table-border-color);
            border-radius: 6px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            padding: 15px;
            position: absolute;
            left: 0;
            top: 32px;
            max-width: 400px;
            min-width: 200px;
            z-index: 9999;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option {
            align-items: center;
            display: flex;
        }
        .log-filter .filter-select-all-or-none {
            margin-bottom: 10px;
        }
        .log-filter .filter-select-all-or-none button + button {
            margin-left: 15px;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option + .log-filter-option {
            margin: 7px 0 0;
        }
        .log-filters .log-filter .log-filter-content .log-filter-option label {
            cursor: pointer;
            flex: 1;
            padding-left: 10px;
        }

        table.logs {
            border-bottom-width: 0;
            border-collapse: collapse;
        }
        table.logs tr + tr td {
            border-width: 1px 0 0;
        }
        table.logs .metadata {
            display: block;
            font-size: 12px;
        }
        .theme-dark tr.status-error td,
        .theme-dark tr.status-warning td { border-bottom: unset; border-top: unset; }

        table.logs .log-timestamp {
            color: var(--log-timestamp-color);
        }
        table.logs .log-metadata {
            margin: 8px 0 0;
        }
        table.logs .log-metadata > span {
            display: inline-block;
        }
        table.logs .log-metadata > span + span {
            margin-left: 10px;
        }
        table.logs .log-metadata .log-channel {
            color: var(--base-1);
            font-size: 13px;
            font-weight: bold;
        }
        table.logs .log-metadata .badge {
            background: var(--badge-light-background);
            color: var(--badge-light-color);
        }
        table.logs .log-metadata .log-num-occurrences {
            color: var(--color-muted);
            font-size: 13px;
        }
        table.logs .log-metadata .context {
            background: var(--code-block-background);
            border-radius: 4px;
            padding: 5px;
        }
        table.logs .log-metadata .context + .context {
            margin-top: 10px;
        }
        .log-type-badge {
            background: var(--badge-light-background);
            box-shadow: none;
            color: var(--badge-light-color);
            display: inline-block;
            font-family: var(--font-family-system);
            margin-top: 5px;
        }
        .log-type-badge.badge-deprecation,
        .log-type-badge.badge-warning {
            background: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .log-type-badge.badge-error {
            background: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .log-type-badge.badge-silenced {
            background: #EDE9FE;
            color: #6D28D9;
        }
        .theme-dark .log-type-badge.badge-silenced {
            background: #5B21B6;
            color: #EDE9FE;
        }

        tr.log-status-warning > td:first-child,
        tr.log-status-error > td:first-child,
        tr.log-status-silenced > td:first-child {
            position: relative;
        }
        tr.log-status-warning > td:first-child:before,
        tr.log-status-error > td:first-child:before,
        tr.log-status-silenced > td:first-child:before {
            background: transparent;
            border-radius: 0;
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
        }
        tr.log-status-warning > td:first-child:before {
            background: var(--yellow-400);
        }
        tr.log-status-error > td:first-child:before {
            background: var(--red-400);
        }
        tr.log-status-silenced > td:first-child:before {
            background: #a78bfa;
        }

        .container-compilation-logs {
            background: var(--table-background);
            border: 1px solid var(--base-2);
            border-radius: 6px;
            margin-top: 30px;
            padding: 15px;
        }
        .container-compilation-logs summary {
            cursor: pointer;
        }
        .container-compilation-logs summary h4 {
            margin: 0 0 5px;
        }
        .container-compilation-logs summary p {
            margin: 0;
        }
    </style>
{% endblock %}

{% block javascripts %}
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerLoggerPanel();
        });

        class SymfonyProfilerLoggerPanel {
            constructor() {
                this.#initializeLogsTable();
            }

            #initializeLogsTable() {
                this.#updateLogsTable();

                document.querySelectorAll('.log-filter input').forEach((input) => {
                    input.addEventListener('change', () => { this.#updateLogsTable(); });
                });

                document.querySelectorAll('.filter-select-all-or-none button').forEach((link) => {
                    link.addEventListener('click', () => {
                        const selectAll = link.classList.contains('select-all');
                        link.closest('.log-filter-content').querySelectorAll('input').forEach((input) => {
                            input.checked = selectAll;
                        });

                        this.#updateLogsTable();
                    });
                });

                document.body.addEventListener('click', (event) => {
                    document.querySelectorAll('details.log-filter').forEach((filterElement) => {
                        if (!filterElement.contains(event.target) && filterElement.open) {
                            filterElement.open = false;
                        }
                    });
                });
            }

            #updateLogsTable() {
                const logs = document.querySelector('table.logs');
                if (null === logs) {
                    return;
                }

                const selectedType = document.querySelector('#log-filter-type input:checked').value;
                const priorities = document.querySelectorAll('#log-filter-priority input');
                const allPriorities = Array.from(priorities).map((input) => input.value);
                const selectedPriorities = Array.from(priorities).filter((input) => input.checked).map((input) => input.value);
                const channels = document.querySelectorAll('#log-filter-channel input');
                const selectedChannels = Array.from(channels).filter((input) => input.checked).map((input) => input.value);

                /* hide rows that don't match the current filters */
                let numVisibleRows = 0;
                logs.querySelectorAll('tbody tr').forEach((row) => {
                    if ('all' !== selectedType && selectedType !== row.getAttribute('data-type')) {
                        row.style.display = 'none';
                        return;
                    }

                    const priority = row.getAttribute('data-priority');
                    if (false === selectedPriorities.includes(priority) && true === allPriorities.includes(priority)) {
                        row.style.display = 'none';
                        return;
                    }

                    if ('' !== row.getAttribute('data-channel') && false === selectedChannels.includes(row.getAttribute('data-channel'))) {
                        row.style.display = 'none';
                        return;
                    }

                    row.style.display = 'table-row';
                    numVisibleRows++;
                });

                document.querySelector('table.logs').style.display = 0 === numVisibleRows ? 'none' : 'table';
                document.querySelector('.no-logs-message').style.display = 0 === numVisibleRows ? 'block' : 'none';

                /* update the selected totals of all filters */
                document.querySelector('#log-filter-priority .filter-active-num').innerText = (priorities.length === selectedPriorities.length) ? 'All' : selectedPriorities.length;
                document.querySelector('#log-filter-channel .filter-active-num').innerText = (channels.length === selectedChannels.length) ? 'All' : selectedChannels.length;
            }
        }
    </script>
{% endblock %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : collector.countwarnings ? 'yellow' : 'none' %}
            {{ source('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'none' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' : 'none' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.processedLogs is empty %}
        <div class=\"empty empty-panel\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {% set has_error_logs = collector.processedLogs|column('type')|filter(type => 'error' == type)|length > 0 %}
        {% set has_deprecation_logs = collector.processedLogs|column('type')|filter(type => 'deprecation' == type)|length > 0 %}

        {% set filters = collector.filters %}
        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <div class=\"tab-navigation\">
                    {% set initially_active_tab = has_error_logs ? 'error' : has_deprecation_logs ? 'deprecation' : 'all' %}
                    <input type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\" {{ 'all' == initially_active_tab ? 'checked' }}>
                    <label for=\"filter-log-type-all\" class=\"tab-control\">
                        All messages
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\" {{ 'error' == initially_active_tab ? 'checked' }}>
                    <label for=\"filter-log-type-error\" class=\"tab-control\">
                        Errors
                        <span class=\"badge status-{{ collector.counterrors ? 'error' }}\">{{ collector.counterrors|default(0) }}</span>
                    </label>

                    <input type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\" {{ 'deprecation' == initially_active_tab ? 'checked' }}>
                    <label for=\"filter-log-type-deprecation\" class=\"tab-control\">
                        Deprecations
                        <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span>
                    </label>
                </div>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">{{ source('@WebProfiler/Icon/filter.svg') }}</span>
                    Level (<span class=\"filter-active-num\">{{ filters.priority|length - 1 }}</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    {% for label, value in filters.priority %}
                        <div class=\"log-filter-option\">
                            <input {{ 'debug' != value ? 'checked' }} type=\"checkbox\" id=\"filter-log-level-{{ value }}\" name=\"filter-log-level-{{ value }}\" value=\"{{ value }}\">
                            <label for=\"filter-log-level-{{ value }}\">{{ label }}</label>
                        </div>
                    {% endfor %}
                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">{{ source('@WebProfiler/Icon/filter.svg') }}</span>
                    Channel (<span class=\"filter-active-num\">{{ filters.channel|length - 1 }}</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    {% for value in filters.channel %}
                        <div class=\"log-filter-option\">
                            <input {{ 'event' != value ? 'checked' }} type=\"checkbox\" id=\"filter-log-channel-{{ value }}\" name=\"filter-log-channel-{{ value }}\" value=\"{{ value }}\">
                            <label for=\"filter-log-channel-{{ value }}\">{{ value|title }}</label>
                        </div>
                    {% endfor %}
                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col style=\"width: 140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                {% for log in collector.processedLogs %}
                    {% set css_class = 'error' == log.type ? 'error'
                        : (log.priorityName == 'WARNING' or 'deprecation' == log.type) ? 'warning'
                        : 'silenced' == log.type ? 'silenced'
                    %}
                    <tr class=\"log-status-{{ css_class }}\" data-type=\"{{ log.type }}\" data-priority=\"{{ log.priority }}\" data-channel=\"{{ log.channel }}\" style=\"{{ 'event' == log.channel or 'DEBUG' == log.priorityName ? 'display: none' }}\">
                        <td class=\"log-timestamp\">
                            <time class=\"newline\" title=\"{{ log.timestamp|date('r') }}\" datetime=\"{{ log.timestamp|date(constant('DateTimeInterface::RFC3339_EXTENDED')) }}\" data-convert-to-user-timezone data-render-as-time data-render-with-millisecond-precision>
                                {{ log.timestamp|date('H:i:s.v') }}
                            </time>

                            {% if log.type in ['error', 'deprecation', 'silenced'] or 'WARNING' == log.priorityName %}
                                <span class=\"log-type-badge badge badge-{{ css_class }}\">
                                    {% if 'error' == log.type or 'WARNING' == log.priorityName %}
                                        {{ log.priorityName|lower }}
                                    {% else %}
                                        {{ log.type|lower }}
                                    {% endif %}
                                </span>
                            {% else %}
                                <span class=\"log-type-badge badge badge-{{ css_class }}\">
                                    {{ log.priorityName|lower }}
                                </span>
                            {% endif %}
                        </td>

                        <td class=\"font-normal\">
                            {{ _self.render_log_message('debug', loop.index, log) }}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>
    {% endif %}

    {% set compilerLogTotal = collector.compilerLogs|reduce((total, logs) => total + logs|length, 0) %}
    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">({{ compilerLogTotal }})</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        {% if collector.compilerLogs is empty %}
            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        {% else %}
            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                {% for class, logs in collector.compilerLogs %}
                    <tr>
                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                        <td class=\"font-normal\">
                            {% set context_id = 'context-compiler-' ~ loop.index %}

                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</button>

                            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    {% for log in logs %}
                                        <li>{{ profiler_dump_log(log.message) }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </details>
{% endblock %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}
    {% endif %}

    <div class=\"log-metadata\">
        {% if log.channel %}
            <span class=\"badge\">{{ log.channel }}</span>
        {% endif %}

        {% if log.errorCount is defined and log.errorCount > 1 %}
            <span class=\"log-num-occurrences\">{{ log.errorCount }} times</span>
        {% endif %}

        {% if has_context %}
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        {% endif %}

        {% if has_trace %}
            {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        {% endif %}

        {% if has_context %}
            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context, maxDepth=1) }}
            </div>
        {% endif %}

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    </div>
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/var/www/html/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "macro" => 540, "if" => 324, "set" => 325, "for" => 411];
        static $filters = ["escape" => 328, "default" => 334, "length" => 372, "filter" => 372, "column" => 372, "title" => 435, "date" => 463, "lower" => 470, "reduce" => 495];
        static $functions = ["source" => 327, "include" => 348, "constant" => 463, "profiler_dump_log" => 527, "profiler_dump" => 571];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'macro', 'if', 'set', 'for'],
                ['escape', 'default', 'length', 'filter', 'column', 'title', 'date', 'lower', 'reduce'],
                ['source', 'include', 'constant', 'profiler_dump_log', 'profiler_dump'],
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
