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

/* themes/contrib/belgrade/templates/misc/status-messages.html.twig */
class __TwigTemplate_de372d25d514f2ea9bf86df9932ef461 extends Template
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
        // line 28
        yield "
<div data-drupal-messages>
";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            yield "  ";
            // line 32
            $context["classes"] = ["alert", "alert-dismissible", "fade", "show", "col-12", (((            // line 38
$context["type"] == "status")) ? ("alert-success") : ("")), (((            // line 39
$context["type"] == "warning")) ? ("alert-warning") : ("")), (((            // line 40
$context["type"] == "error")) ? ("alert-danger") : ("")), (((            // line 41
$context["type"] == "info")) ? ("alert-info") : (""))];
            // line 44
            yield "  ";
            // line 45
            $context["role"] = ["status" => "status", "error" => "alert", "warning" => "alert", "info" => "status"];
            // line 52
            yield "  <div aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = ($context["status_headings"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 52)), "html", null, true);
            yield "\" ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "role", "aria-label"), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), "setAttribute", ["role", (($_v1 = ($context["role"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["role"] ?? null), $context["type"], [], "array", false, false, true, 52))], "method", false, false, true, 52), "html", null, true);
            yield ">
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    ";
            // line 54
            if ((($_v2 = ($context["status_headings"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 54))) {
                // line 55
                yield "      <h2 class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v3 = ($context["status_headings"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[$context["type"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["status_headings"] ?? null), $context["type"], [], "array", false, false, true, 55)), "html", null, true);
                yield "</h2>
    ";
            }
            // line 57
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 58
                yield "      ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 58)) {
                    // line 59
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "
      ";
                } else {
                    // line 61
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["message"], "html", null, true);
                    yield "
        <hr>
      ";
                }
                // line 64
                yield "    ";
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
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["message_list", "status_headings", "attributes", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/misc/status-messages.html.twig";
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
        return array (  135 => 67,  128 => 65,  114 => 64,  107 => 61,  101 => 59,  98 => 58,  80 => 57,  74 => 55,  72 => 54,  64 => 52,  62 => 45,  60 => 44,  58 => 41,  57 => 40,  56 => 39,  55 => 38,  54 => 32,  52 => 31,  48 => 30,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/belgrade/templates/misc/status-messages.html.twig", "C:\\laragon\\www\\mysite\\web\\themes\\contrib\\belgrade\\templates\\misc\\status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 30, "set" => 32, "if" => 54];
        static $filters = ["escape" => 52, "without" => 52];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'without'],
                [],
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
