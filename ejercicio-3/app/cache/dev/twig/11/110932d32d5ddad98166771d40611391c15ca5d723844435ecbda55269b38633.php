<?php

/* form_div_layout.html.twig */
class __TwigTemplate_948bd2f60d98fd1ca12d993ea3144c2a490e7b6565cbd94dbe3ef063f4485624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b36d50fa77410d181124038f31bebbf0e5554e92d5b8345dcfd079131357e179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36d50fa77410d181124038f31bebbf0e5554e92d5b8345dcfd079131357e179->enter($__internal_b36d50fa77410d181124038f31bebbf0e5554e92d5b8345dcfd079131357e179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('button_widget', $context, $blocks);
        // line 192
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 197
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 204
        $this->displayBlock('form_label', $context, $blocks);
        // line 226
        $this->displayBlock('button_label', $context, $blocks);
        // line 230
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 238
        $this->displayBlock('form_row', $context, $blocks);
        // line 246
        $this->displayBlock('button_row', $context, $blocks);
        // line 252
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 258
        $this->displayBlock('form', $context, $blocks);
        // line 264
        $this->displayBlock('form_start', $context, $blocks);
        // line 277
        $this->displayBlock('form_end', $context, $blocks);
        // line 284
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 288
        $this->displayBlock('form_errors', $context, $blocks);
        // line 298
        $this->displayBlock('form_rest', $context, $blocks);
        // line 305
        echo "
";
        // line 308
        $this->displayBlock('form_rows', $context, $blocks);
        // line 314
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 331
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 345
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 359
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_b36d50fa77410d181124038f31bebbf0e5554e92d5b8345dcfd079131357e179->leave($__internal_b36d50fa77410d181124038f31bebbf0e5554e92d5b8345dcfd079131357e179_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_07356f6b6fc66f80640866375290520447bcda6c515ff1481f7970fc5fd0bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07356f6b6fc66f80640866375290520447bcda6c515ff1481f7970fc5fd0bb1e->enter($__internal_07356f6b6fc66f80640866375290520447bcda6c515ff1481f7970fc5fd0bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_07356f6b6fc66f80640866375290520447bcda6c515ff1481f7970fc5fd0bb1e->leave($__internal_07356f6b6fc66f80640866375290520447bcda6c515ff1481f7970fc5fd0bb1e_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d385fd4e732bb38a44bfa40ffaf661d4166e57491d6eafe250a6b4356a2514f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d385fd4e732bb38a44bfa40ffaf661d4166e57491d6eafe250a6b4356a2514f4->enter($__internal_d385fd4e732bb38a44bfa40ffaf661d4166e57491d6eafe250a6b4356a2514f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_d385fd4e732bb38a44bfa40ffaf661d4166e57491d6eafe250a6b4356a2514f4->leave($__internal_d385fd4e732bb38a44bfa40ffaf661d4166e57491d6eafe250a6b4356a2514f4_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_092f4d0f2810a5ad5bc83c05d3ed6ef3080053365c8dfbefdd3b569d690b92ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092f4d0f2810a5ad5bc83c05d3ed6ef3080053365c8dfbefdd3b569d690b92ee->enter($__internal_092f4d0f2810a5ad5bc83c05d3ed6ef3080053365c8dfbefdd3b569d690b92ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_092f4d0f2810a5ad5bc83c05d3ed6ef3080053365c8dfbefdd3b569d690b92ee->leave($__internal_092f4d0f2810a5ad5bc83c05d3ed6ef3080053365c8dfbefdd3b569d690b92ee_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_4d9f36200abcee9c5f286c2880c459380a3b24281d7a280adb3f7e4ef62b68d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9f36200abcee9c5f286c2880c459380a3b24281d7a280adb3f7e4ef62b68d6->enter($__internal_4d9f36200abcee9c5f286c2880c459380a3b24281d7a280adb3f7e4ef62b68d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_4d9f36200abcee9c5f286c2880c459380a3b24281d7a280adb3f7e4ef62b68d6->leave($__internal_4d9f36200abcee9c5f286c2880c459380a3b24281d7a280adb3f7e4ef62b68d6_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_6fa44408fa5fa11da15caa583f21289aa7a67748f619bf9422ae7db29ec9977c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa44408fa5fa11da15caa583f21289aa7a67748f619bf9422ae7db29ec9977c->enter($__internal_6fa44408fa5fa11da15caa583f21289aa7a67748f619bf9422ae7db29ec9977c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_6fa44408fa5fa11da15caa583f21289aa7a67748f619bf9422ae7db29ec9977c->leave($__internal_6fa44408fa5fa11da15caa583f21289aa7a67748f619bf9422ae7db29ec9977c_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_aec2ed15cd8f18ac28e8029445833683831bfecef9c71f570e9eb1074bbbc0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec2ed15cd8f18ac28e8029445833683831bfecef9c71f570e9eb1074bbbc0d9->enter($__internal_aec2ed15cd8f18ac28e8029445833683831bfecef9c71f570e9eb1074bbbc0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_aec2ed15cd8f18ac28e8029445833683831bfecef9c71f570e9eb1074bbbc0d9->leave($__internal_aec2ed15cd8f18ac28e8029445833683831bfecef9c71f570e9eb1074bbbc0d9_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e837cb324775642f079c6d9ffd3a3b2afbfc43afe2e65df2946b304db3758a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e837cb324775642f079c6d9ffd3a3b2afbfc43afe2e65df2946b304db3758a29->enter($__internal_e837cb324775642f079c6d9ffd3a3b2afbfc43afe2e65df2946b304db3758a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_e837cb324775642f079c6d9ffd3a3b2afbfc43afe2e65df2946b304db3758a29->leave($__internal_e837cb324775642f079c6d9ffd3a3b2afbfc43afe2e65df2946b304db3758a29_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_068fc1f55e9940b4463fa415279c860699c073ad83bc78a4201bb4edfd34df7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068fc1f55e9940b4463fa415279c860699c073ad83bc78a4201bb4edfd34df7a->enter($__internal_068fc1f55e9940b4463fa415279c860699c073ad83bc78a4201bb4edfd34df7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_068fc1f55e9940b4463fa415279c860699c073ad83bc78a4201bb4edfd34df7a->leave($__internal_068fc1f55e9940b4463fa415279c860699c073ad83bc78a4201bb4edfd34df7a_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_fec0b1a9b45e471bb89fb44e7a0d7e6ff8aaea7af5820e21c0a108260260174f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec0b1a9b45e471bb89fb44e7a0d7e6ff8aaea7af5820e21c0a108260260174f->enter($__internal_fec0b1a9b45e471bb89fb44e7a0d7e6ff8aaea7af5820e21c0a108260260174f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fec0b1a9b45e471bb89fb44e7a0d7e6ff8aaea7af5820e21c0a108260260174f->leave($__internal_fec0b1a9b45e471bb89fb44e7a0d7e6ff8aaea7af5820e21c0a108260260174f_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b9aacd8a34d8410ba50eea233376f0f24745c4b0eac6e76e0d509228289643cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9aacd8a34d8410ba50eea233376f0f24745c4b0eac6e76e0d509228289643cf->enter($__internal_b9aacd8a34d8410ba50eea233376f0f24745c4b0eac6e76e0d509228289643cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_b9aacd8a34d8410ba50eea233376f0f24745c4b0eac6e76e0d509228289643cf->leave($__internal_b9aacd8a34d8410ba50eea233376f0f24745c4b0eac6e76e0d509228289643cf_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_35f298c23978225e0635e5b2d00592b5a280ed50b7151a0d8acb3fa2d0c43ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f298c23978225e0635e5b2d00592b5a280ed50b7151a0d8acb3fa2d0c43ab7->enter($__internal_35f298c23978225e0635e5b2d00592b5a280ed50b7151a0d8acb3fa2d0c43ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_35f298c23978225e0635e5b2d00592b5a280ed50b7151a0d8acb3fa2d0c43ab7->leave($__internal_35f298c23978225e0635e5b2d00592b5a280ed50b7151a0d8acb3fa2d0c43ab7_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_bf019eb388346bfa1e5565562fce7dccc320c9088f2064a68d7753026b502a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf019eb388346bfa1e5565562fce7dccc320c9088f2064a68d7753026b502a2b->enter($__internal_bf019eb388346bfa1e5565562fce7dccc320c9088f2064a68d7753026b502a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_bf019eb388346bfa1e5565562fce7dccc320c9088f2064a68d7753026b502a2b->leave($__internal_bf019eb388346bfa1e5565562fce7dccc320c9088f2064a68d7753026b502a2b_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_392040ec6e076181c330012aa8c962015efc17d7b7c03dea6b1900ddf81f04f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392040ec6e076181c330012aa8c962015efc17d7b7c03dea6b1900ddf81f04f3->enter($__internal_392040ec6e076181c330012aa8c962015efc17d7b7c03dea6b1900ddf81f04f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_392040ec6e076181c330012aa8c962015efc17d7b7c03dea6b1900ddf81f04f3->leave($__internal_392040ec6e076181c330012aa8c962015efc17d7b7c03dea6b1900ddf81f04f3_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_89ad8e0378e18568ef9bd5cc5f976e2cb01d7c818eef1cb0bf1b1ff874faaadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ad8e0378e18568ef9bd5cc5f976e2cb01d7c818eef1cb0bf1b1ff874faaadc->enter($__internal_89ad8e0378e18568ef9bd5cc5f976e2cb01d7c818eef1cb0bf1b1ff874faaadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_89ad8e0378e18568ef9bd5cc5f976e2cb01d7c818eef1cb0bf1b1ff874faaadc->leave($__internal_89ad8e0378e18568ef9bd5cc5f976e2cb01d7c818eef1cb0bf1b1ff874faaadc_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_fe5ca768041da287f3c32bdf6553b388ffddc29f45ffb3674297abd6082df29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5ca768041da287f3c32bdf6553b388ffddc29f45ffb3674297abd6082df29c->enter($__internal_fe5ca768041da287f3c32bdf6553b388ffddc29f45ffb3674297abd6082df29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fe5ca768041da287f3c32bdf6553b388ffddc29f45ffb3674297abd6082df29c->leave($__internal_fe5ca768041da287f3c32bdf6553b388ffddc29f45ffb3674297abd6082df29c_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_ba5f1c6bdd93af4c96c21edf6910b32294e70cebd086f99e99862f80dc32b20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5f1c6bdd93af4c96c21edf6910b32294e70cebd086f99e99862f80dc32b20b->enter($__internal_ba5f1c6bdd93af4c96c21edf6910b32294e70cebd086f99e99862f80dc32b20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ba5f1c6bdd93af4c96c21edf6910b32294e70cebd086f99e99862f80dc32b20b->leave($__internal_ba5f1c6bdd93af4c96c21edf6910b32294e70cebd086f99e99862f80dc32b20b_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_256b33306eadbdbf2fbea9cace7b7001188cabfae25729e9c1a10f90b2bdc724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256b33306eadbdbf2fbea9cace7b7001188cabfae25729e9c1a10f90b2bdc724->enter($__internal_256b33306eadbdbf2fbea9cace7b7001188cabfae25729e9c1a10f90b2bdc724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_256b33306eadbdbf2fbea9cace7b7001188cabfae25729e9c1a10f90b2bdc724->leave($__internal_256b33306eadbdbf2fbea9cace7b7001188cabfae25729e9c1a10f90b2bdc724_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_2a7dc05e425c2caf34f4f068455e8c091b5450dfb7e5f34d16fcb7e13a7368db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a7dc05e425c2caf34f4f068455e8c091b5450dfb7e5f34d16fcb7e13a7368db->enter($__internal_2a7dc05e425c2caf34f4f068455e8c091b5450dfb7e5f34d16fcb7e13a7368db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2a7dc05e425c2caf34f4f068455e8c091b5450dfb7e5f34d16fcb7e13a7368db->leave($__internal_2a7dc05e425c2caf34f4f068455e8c091b5450dfb7e5f34d16fcb7e13a7368db_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a5986504ee4ea8daa02597d8126c786b9eb839e07e0a873fb5b6c8d5233b2e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5986504ee4ea8daa02597d8126c786b9eb839e07e0a873fb5b6c8d5233b2e33->enter($__internal_a5986504ee4ea8daa02597d8126c786b9eb839e07e0a873fb5b6c8d5233b2e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a5986504ee4ea8daa02597d8126c786b9eb839e07e0a873fb5b6c8d5233b2e33->leave($__internal_a5986504ee4ea8daa02597d8126c786b9eb839e07e0a873fb5b6c8d5233b2e33_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e99a46398b3c90e4b59bed80de28be1faf9fb649fdf3272d7348091df76ec142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99a46398b3c90e4b59bed80de28be1faf9fb649fdf3272d7348091df76ec142->enter($__internal_e99a46398b3c90e4b59bed80de28be1faf9fb649fdf3272d7348091df76ec142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_e99a46398b3c90e4b59bed80de28be1faf9fb649fdf3272d7348091df76ec142->leave($__internal_e99a46398b3c90e4b59bed80de28be1faf9fb649fdf3272d7348091df76ec142_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_6ade971c7ce6249d86176755af7304462951a1ba233d05d8c8d7bb310252a937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ade971c7ce6249d86176755af7304462951a1ba233d05d8c8d7bb310252a937->enter($__internal_6ade971c7ce6249d86176755af7304462951a1ba233d05d8c8d7bb310252a937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6ade971c7ce6249d86176755af7304462951a1ba233d05d8c8d7bb310252a937->leave($__internal_6ade971c7ce6249d86176755af7304462951a1ba233d05d8c8d7bb310252a937_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_be42847b7d0f068e33bc02dc0b4e371a43915ed7397a5552b56a2b2344b248d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be42847b7d0f068e33bc02dc0b4e371a43915ed7397a5552b56a2b2344b248d1->enter($__internal_be42847b7d0f068e33bc02dc0b4e371a43915ed7397a5552b56a2b2344b248d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_be42847b7d0f068e33bc02dc0b4e371a43915ed7397a5552b56a2b2344b248d1->leave($__internal_be42847b7d0f068e33bc02dc0b4e371a43915ed7397a5552b56a2b2344b248d1_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_f88c9b9b50bf555dc57be954024fbdf8082c7c2c05be089f7925b27dcc604c68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88c9b9b50bf555dc57be954024fbdf8082c7c2c05be089f7925b27dcc604c68->enter($__internal_f88c9b9b50bf555dc57be954024fbdf8082c7c2c05be089f7925b27dcc604c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f88c9b9b50bf555dc57be954024fbdf8082c7c2c05be089f7925b27dcc604c68->leave($__internal_f88c9b9b50bf555dc57be954024fbdf8082c7c2c05be089f7925b27dcc604c68_prof);

    }

    // line 178
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_203333dfd87df5ec168ad2c5c846714d6aa4ee5ec724a7054cc93946f204c71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203333dfd87df5ec168ad2c5c846714d6aa4ee5ec724a7054cc93946f204c71c->enter($__internal_203333dfd87df5ec168ad2c5c846714d6aa4ee5ec724a7054cc93946f204c71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 179
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 180
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 181
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 182
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 183
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 186
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 189
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_203333dfd87df5ec168ad2c5c846714d6aa4ee5ec724a7054cc93946f204c71c->leave($__internal_203333dfd87df5ec168ad2c5c846714d6aa4ee5ec724a7054cc93946f204c71c_prof);

    }

    // line 192
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_7d6886e340a4eb0bc0342a79c77d924521a3fd217f19199c22c44e82056f73e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6886e340a4eb0bc0342a79c77d924521a3fd217f19199c22c44e82056f73e2->enter($__internal_7d6886e340a4eb0bc0342a79c77d924521a3fd217f19199c22c44e82056f73e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 193
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 194
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_7d6886e340a4eb0bc0342a79c77d924521a3fd217f19199c22c44e82056f73e2->leave($__internal_7d6886e340a4eb0bc0342a79c77d924521a3fd217f19199c22c44e82056f73e2_prof);

    }

    // line 197
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_554067ccb73a956ad4b60240f2f8d9ed7eaaffc2f49ad15a8f761709c671043b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554067ccb73a956ad4b60240f2f8d9ed7eaaffc2f49ad15a8f761709c671043b->enter($__internal_554067ccb73a956ad4b60240f2f8d9ed7eaaffc2f49ad15a8f761709c671043b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_554067ccb73a956ad4b60240f2f8d9ed7eaaffc2f49ad15a8f761709c671043b->leave($__internal_554067ccb73a956ad4b60240f2f8d9ed7eaaffc2f49ad15a8f761709c671043b_prof);

    }

    // line 204
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d9cedab3960e912f0a68dec0fec8e5daefc62d1aeb24c6dcd626181bf5f4a81a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cedab3960e912f0a68dec0fec8e5daefc62d1aeb24c6dcd626181bf5f4a81a->enter($__internal_d9cedab3960e912f0a68dec0fec8e5daefc62d1aeb24c6dcd626181bf5f4a81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 205
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 206
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 207
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 209
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 210
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 212
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 213
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 214
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 215
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 216
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 219
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 222
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_d9cedab3960e912f0a68dec0fec8e5daefc62d1aeb24c6dcd626181bf5f4a81a->leave($__internal_d9cedab3960e912f0a68dec0fec8e5daefc62d1aeb24c6dcd626181bf5f4a81a_prof);

    }

    // line 226
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_3b7285447f69ca54a4f0ab37928598ee7279e16800a5ce9fa8aa61ca26c4cd1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7285447f69ca54a4f0ab37928598ee7279e16800a5ce9fa8aa61ca26c4cd1e->enter($__internal_3b7285447f69ca54a4f0ab37928598ee7279e16800a5ce9fa8aa61ca26c4cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_3b7285447f69ca54a4f0ab37928598ee7279e16800a5ce9fa8aa61ca26c4cd1e->leave($__internal_3b7285447f69ca54a4f0ab37928598ee7279e16800a5ce9fa8aa61ca26c4cd1e_prof);

    }

    // line 230
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_d72c2e26ef12d6f1081fed45e660ac6f803b3010731ea1fbf9a987a687056464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72c2e26ef12d6f1081fed45e660ac6f803b3010731ea1fbf9a987a687056464->enter($__internal_d72c2e26ef12d6f1081fed45e660ac6f803b3010731ea1fbf9a987a687056464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 235
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_d72c2e26ef12d6f1081fed45e660ac6f803b3010731ea1fbf9a987a687056464->leave($__internal_d72c2e26ef12d6f1081fed45e660ac6f803b3010731ea1fbf9a987a687056464_prof);

    }

    // line 238
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_18c2f2b1d17855c202221cc0ae8899d060283f92fb59c72828f403548c8a795b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c2f2b1d17855c202221cc0ae8899d060283f92fb59c72828f403548c8a795b->enter($__internal_18c2f2b1d17855c202221cc0ae8899d060283f92fb59c72828f403548c8a795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 239
        echo "<div>";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_18c2f2b1d17855c202221cc0ae8899d060283f92fb59c72828f403548c8a795b->leave($__internal_18c2f2b1d17855c202221cc0ae8899d060283f92fb59c72828f403548c8a795b_prof);

    }

    // line 246
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_371f8d9bb19e9a85015d210c68dfcfd58f674ffec627091a0938c8477dc406e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371f8d9bb19e9a85015d210c68dfcfd58f674ffec627091a0938c8477dc406e1->enter($__internal_371f8d9bb19e9a85015d210c68dfcfd58f674ffec627091a0938c8477dc406e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 247
        echo "<div>";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_371f8d9bb19e9a85015d210c68dfcfd58f674ffec627091a0938c8477dc406e1->leave($__internal_371f8d9bb19e9a85015d210c68dfcfd58f674ffec627091a0938c8477dc406e1_prof);

    }

    // line 252
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e31a524464e2dd5795bb3e4f0706b5ea8611b3ed09f3cf467d5656e5b8eb0672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e31a524464e2dd5795bb3e4f0706b5ea8611b3ed09f3cf467d5656e5b8eb0672->enter($__internal_e31a524464e2dd5795bb3e4f0706b5ea8611b3ed09f3cf467d5656e5b8eb0672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_e31a524464e2dd5795bb3e4f0706b5ea8611b3ed09f3cf467d5656e5b8eb0672->leave($__internal_e31a524464e2dd5795bb3e4f0706b5ea8611b3ed09f3cf467d5656e5b8eb0672_prof);

    }

    // line 258
    public function block_form($context, array $blocks = array())
    {
        $__internal_1b103b8918151e9fbcd8fc6231d85cc362d90e4149096899b1eb06942f947c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b103b8918151e9fbcd8fc6231d85cc362d90e4149096899b1eb06942f947c07->enter($__internal_1b103b8918151e9fbcd8fc6231d85cc362d90e4149096899b1eb06942f947c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 259
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 261
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_1b103b8918151e9fbcd8fc6231d85cc362d90e4149096899b1eb06942f947c07->leave($__internal_1b103b8918151e9fbcd8fc6231d85cc362d90e4149096899b1eb06942f947c07_prof);

    }

    // line 264
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e890c98db33adeb48b4b0361630115b1971368def36c06c44b6d39b7d8b41405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e890c98db33adeb48b4b0361630115b1971368def36c06c44b6d39b7d8b41405->enter($__internal_e890c98db33adeb48b4b0361630115b1971368def36c06c44b6d39b7d8b41405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 265
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 266
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 267
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 269
            $context["form_method"] = "POST";
        }
        // line 271
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 272
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 273
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_e890c98db33adeb48b4b0361630115b1971368def36c06c44b6d39b7d8b41405->leave($__internal_e890c98db33adeb48b4b0361630115b1971368def36c06c44b6d39b7d8b41405_prof);

    }

    // line 277
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_4658e88a9745aab827005badd928504821b455a70f2d978985558418f0f8809f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4658e88a9745aab827005badd928504821b455a70f2d978985558418f0f8809f->enter($__internal_4658e88a9745aab827005badd928504821b455a70f2d978985558418f0f8809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 278
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 281
        echo "</form>";
        
        $__internal_4658e88a9745aab827005badd928504821b455a70f2d978985558418f0f8809f->leave($__internal_4658e88a9745aab827005badd928504821b455a70f2d978985558418f0f8809f_prof);

    }

    // line 284
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_9503f60a33f14852f9002f8254d98324e8b0aae5bd3cd0c3c5401aa9e1305ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9503f60a33f14852f9002f8254d98324e8b0aae5bd3cd0c3c5401aa9e1305ed7->enter($__internal_9503f60a33f14852f9002f8254d98324e8b0aae5bd3cd0c3c5401aa9e1305ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 285
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_9503f60a33f14852f9002f8254d98324e8b0aae5bd3cd0c3c5401aa9e1305ed7->leave($__internal_9503f60a33f14852f9002f8254d98324e8b0aae5bd3cd0c3c5401aa9e1305ed7_prof);

    }

    // line 288
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e272df303e7aaa2185869fcd92fb39f65093048eaca5c3c84003d5be8ccff8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e272df303e7aaa2185869fcd92fb39f65093048eaca5c3c84003d5be8ccff8c5->enter($__internal_e272df303e7aaa2185869fcd92fb39f65093048eaca5c3c84003d5be8ccff8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 289
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 290
            echo "<ul>";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 292
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "</ul>";
        }
        
        $__internal_e272df303e7aaa2185869fcd92fb39f65093048eaca5c3c84003d5be8ccff8c5->leave($__internal_e272df303e7aaa2185869fcd92fb39f65093048eaca5c3c84003d5be8ccff8c5_prof);

    }

    // line 298
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_ffffa9fc707744c0cc23e814f93bb161b6f3e1f77fa6985f25980df0d05a8d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffffa9fc707744c0cc23e814f93bb161b6f3e1f77fa6985f25980df0d05a8d35->enter($__internal_ffffa9fc707744c0cc23e814f93bb161b6f3e1f77fa6985f25980df0d05a8d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 300
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 301
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ffffa9fc707744c0cc23e814f93bb161b6f3e1f77fa6985f25980df0d05a8d35->leave($__internal_ffffa9fc707744c0cc23e814f93bb161b6f3e1f77fa6985f25980df0d05a8d35_prof);

    }

    // line 308
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_868bbc5fce2ac702d53d8f21c511992494dea632a2ed5c08cc9305020968ea91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868bbc5fce2ac702d53d8f21c511992494dea632a2ed5c08cc9305020968ea91->enter($__internal_868bbc5fce2ac702d53d8f21c511992494dea632a2ed5c08cc9305020968ea91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_868bbc5fce2ac702d53d8f21c511992494dea632a2ed5c08cc9305020968ea91->leave($__internal_868bbc5fce2ac702d53d8f21c511992494dea632a2ed5c08cc9305020968ea91_prof);

    }

    // line 314
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_c5e743b18bed0192528ec5c509ddf096e7a381e75d0e9fd02c9a025f7eb2be06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e743b18bed0192528ec5c509ddf096e7a381e75d0e9fd02c9a025f7eb2be06->enter($__internal_c5e743b18bed0192528ec5c509ddf096e7a381e75d0e9fd02c9a025f7eb2be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 315
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 316
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 317
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 318
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !(isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
                // line 320
                echo " ";
                // line 321
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 322
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 323
$context["attrvalue"] === true)) {
                    // line 324
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 325
$context["attrvalue"] === false)) {
                    // line 326
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c5e743b18bed0192528ec5c509ddf096e7a381e75d0e9fd02c9a025f7eb2be06->leave($__internal_c5e743b18bed0192528ec5c509ddf096e7a381e75d0e9fd02c9a025f7eb2be06_prof);

    }

    // line 331
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_ef26ae8fe57cecda379abc2e0abc334040767ab8db4241fe81ee4a070e4f253d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef26ae8fe57cecda379abc2e0abc334040767ab8db4241fe81ee4a070e4f253d->enter($__internal_ef26ae8fe57cecda379abc2e0abc334040767ab8db4241fe81ee4a070e4f253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 332
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 334
            echo " ";
            // line 335
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 336
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 337
$context["attrvalue"] === true)) {
                // line 338
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 339
$context["attrvalue"] === false)) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ef26ae8fe57cecda379abc2e0abc334040767ab8db4241fe81ee4a070e4f253d->leave($__internal_ef26ae8fe57cecda379abc2e0abc334040767ab8db4241fe81ee4a070e4f253d_prof);

    }

    // line 345
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_97cd7147af26515d5e3f7a3007fc92d81333cf03462cfa84dd09aa966ea765ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cd7147af26515d5e3f7a3007fc92d81333cf03462cfa84dd09aa966ea765ff->enter($__internal_97cd7147af26515d5e3f7a3007fc92d81333cf03462cfa84dd09aa966ea765ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 346
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 348
            echo " ";
            // line 349
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 350
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 351
$context["attrvalue"] === true)) {
                // line 352
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 353
$context["attrvalue"] === false)) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_97cd7147af26515d5e3f7a3007fc92d81333cf03462cfa84dd09aa966ea765ff->leave($__internal_97cd7147af26515d5e3f7a3007fc92d81333cf03462cfa84dd09aa966ea765ff_prof);

    }

    // line 359
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_7a321d318a964c6db9eebe80b5b97c32764036b55a65543d8aca62e2dd958fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a321d318a964c6db9eebe80b5b97c32764036b55a65543d8aca62e2dd958fb5->enter($__internal_7a321d318a964c6db9eebe80b5b97c32764036b55a65543d8aca62e2dd958fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 361
            echo " ";
            // line 362
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 363
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 364
$context["attrvalue"] === true)) {
                // line 365
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 366
$context["attrvalue"] === false)) {
                // line 367
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7a321d318a964c6db9eebe80b5b97c32764036b55a65543d8aca62e2dd958fb5->leave($__internal_7a321d318a964c6db9eebe80b5b97c32764036b55a65543d8aca62e2dd958fb5_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1271 => 367,  1269 => 366,  1264 => 365,  1262 => 364,  1257 => 363,  1255 => 362,  1253 => 361,  1249 => 360,  1243 => 359,  1228 => 354,  1226 => 353,  1221 => 352,  1219 => 351,  1214 => 350,  1212 => 349,  1210 => 348,  1206 => 347,  1197 => 346,  1191 => 345,  1176 => 340,  1174 => 339,  1169 => 338,  1167 => 337,  1162 => 336,  1160 => 335,  1158 => 334,  1154 => 333,  1148 => 332,  1142 => 331,  1126 => 326,  1124 => 325,  1119 => 324,  1117 => 323,  1112 => 322,  1110 => 321,  1108 => 320,  1103 => 319,  1099 => 318,  1095 => 317,  1091 => 316,  1085 => 315,  1079 => 314,  1068 => 310,  1064 => 309,  1058 => 308,  1046 => 301,  1044 => 300,  1040 => 299,  1034 => 298,  1026 => 294,  1018 => 292,  1014 => 291,  1012 => 290,  1010 => 289,  1004 => 288,  995 => 285,  989 => 284,  982 => 281,  979 => 279,  977 => 278,  971 => 277,  961 => 273,  959 => 272,  935 => 271,  932 => 269,  929 => 267,  927 => 266,  925 => 265,  919 => 264,  912 => 261,  910 => 260,  908 => 259,  902 => 258,  895 => 253,  889 => 252,  882 => 249,  880 => 248,  878 => 247,  872 => 246,  865 => 243,  863 => 242,  861 => 241,  859 => 240,  857 => 239,  851 => 238,  844 => 235,  838 => 230,  827 => 226,  804 => 222,  800 => 219,  797 => 216,  796 => 215,  795 => 214,  793 => 213,  791 => 212,  788 => 210,  786 => 209,  783 => 207,  781 => 206,  779 => 205,  773 => 204,  766 => 199,  764 => 198,  758 => 197,  751 => 194,  749 => 193,  743 => 192,  730 => 189,  726 => 186,  723 => 183,  722 => 182,  721 => 181,  719 => 180,  717 => 179,  711 => 178,  704 => 175,  702 => 174,  696 => 173,  689 => 170,  687 => 169,  681 => 168,  674 => 165,  672 => 164,  666 => 163,  658 => 160,  656 => 159,  650 => 158,  643 => 155,  641 => 154,  635 => 153,  628 => 150,  626 => 149,  620 => 148,  613 => 145,  607 => 144,  600 => 141,  598 => 140,  592 => 139,  585 => 136,  583 => 135,  577 => 133,  569 => 129,  559 => 128,  554 => 127,  552 => 126,  549 => 124,  547 => 123,  541 => 122,  533 => 118,  531 => 116,  530 => 115,  529 => 114,  528 => 113,  524 => 112,  521 => 110,  519 => 109,  513 => 108,  505 => 104,  503 => 103,  501 => 102,  499 => 101,  497 => 100,  493 => 99,  490 => 97,  488 => 96,  482 => 95,  465 => 92,  459 => 91,  442 => 88,  436 => 87,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 359,  150 => 345,  148 => 331,  146 => 314,  144 => 308,  141 => 305,  139 => 298,  137 => 288,  135 => 284,  133 => 277,  131 => 264,  129 => 258,  127 => 252,  125 => 246,  123 => 238,  121 => 230,  119 => 226,  117 => 204,  115 => 197,  113 => 192,  111 => 178,  109 => 173,  107 => 168,  105 => 163,  103 => 158,  101 => 153,  99 => 148,  97 => 144,  95 => 139,  93 => 133,  91 => 122,  89 => 108,  87 => 95,  85 => 91,  83 => 87,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/var/www/html/prueba-programador/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_div_layout.html.twig");
    }
}
