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

/* themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig */
class __TwigTemplate_59cf3d81c383721984e19c0e3b52caed extends Template
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
        // line 1
        $macros["svg"] = $this->macros["svg"] = $this->loadTemplate("@belgrade/macros.twig", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig", 1)->unwrap();
        // line 2
        yield "
<div";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
        yield "\">
      <span class=\"cart-block--summary__icon\">
        ";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["svg"]->getTemplateForMacro("macro_getIcon", $context, 7, $this->getSourceContext())->macro_getIcon(...["basket", 18, 18, "me-1"]));
        yield "
      </span>
      <span class=\"cart-block--summary__count\">";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["count_text"] ?? null), "html", null, true);
        yield "</span>
    </a>
  </div>
  ";
        // line 12
        if (($context["content"] ?? null)) {
            // line 13
            yield "  <div class=\"cart-block--contents bg-primary text-white mt-3\">
    <div class=\"cart-block--contents__inner p-4\">
      <div class=\"fw-bold mb-3\">";
            // line 15
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Shopping bag"));
            yield " / ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["count_text"] ?? null), "html", null, true);
            yield "</div>
      <div class=\"cart-block--contents__items\">
        ";
            // line 17
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
            yield "
      </div>
      <div class=\"cart-block--contents__links mt-3\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 21
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::merge($context["link"], ["#attributes" => ["class" => ["btn", "btn-outline-white", "w-100"]]]), "html", null, true);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "      </div>
    </div>
    <a type=\"button\" class=\"cart-block--link__expand m-3 mt-4 position-absolute top-0 end-0\" href=\"";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true);
            yield "\" aria-label=\"Close\">
      ";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["svg"]->getTemplateForMacro("macro_getIcon", $context, 26, $this->getSourceContext())->macro_getIcon(...["x", 20, 20]));
            yield "
    </a>
  </div>
  ";
        }
        // line 30
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "url", "count_text", "content", "links"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig";
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
        return array (  117 => 30,  110 => 26,  106 => 25,  102 => 23,  93 => 21,  89 => 20,  83 => 17,  76 => 15,  72 => 13,  70 => 12,  64 => 9,  59 => 7,  54 => 5,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/belgrade/templates/commerce/commerce-cart-block.html.twig", "C:\\laragon\\www\\mysite\\web\\themes\\contrib\\belgrade\\templates\\commerce\\commerce-cart-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1, "if" => 12, "for" => 20];
        static $filters = ["escape" => 3, "t" => 15, "merge" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'for'],
                ['escape', 't', 'merge'],
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
