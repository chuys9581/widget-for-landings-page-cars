<?php
class Honda_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'honda_widget';
    }

    public function get_title() {
        return 'Honda Widget';
    }

    public function get_icon() {
        return 'eicon-image-box';
    }

    public function get_categories() {
        return ['general'];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Contenido Principal',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_content_section',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'logo_image',
            [
                'label' => 'Logo Image',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/honda_2025/imgen_sobrfondo.png',
                ],
            ]
        );

        $this->add_control(
            'background_image',
            [
                'label' => 'Imagen de Fondo',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/honda_2025/fondo_portada.jpg',
                ],
            ]
        );

        $this->add_control(
            'precio_desde',
            [
                'label' => 'Precio Desde',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '$684,900',
            ]
        );

        $this->add_control(
            'mensualidades_desde',
            [
                'label' => 'Mensualidades Desde',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '$684,900',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_one',
            [
                'label' => 'Sección Uno',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_one',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'civic_red_image',
            [
                'label' => 'Imagen Civic Rojo',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/civic_rojo.png',
                ],
            ]
        );

        $this->add_control(
            'title_one',
            [
                'label' => 'Título',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'LA EVOLUCIÓN DE UN CLÁSICO',
            ]
        );

        $this->add_control(
            'text_one',
            [
                'label' => 'Texto',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Honda Civic Híbrido 2025 llega proyectando un dinamismo impresionante, con una imagen que luce más poderosa y deportiva, con detalles únicos de su exterior que lo perfilan como uno de los sedanes con mejor diseño y funcionalidad actualmente.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_two',
            [
                'label' => 'Sección Dos',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_two',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'interiores_image',
            [
                'label' => 'Imagen Interiores',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/interiores.png',
                ],
            ]
        );

        $this->add_control(
            'title_two',
            [
                'label' => 'Título',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'COMODIDAD CON PERSPECTIVA',
            ]
        );

        $this->add_control(
            'text_two',
            [
                'label' => 'Texto',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'En el interior vemos reflejada la notable evolución que debe tener un automóvil de esta manufactura. Ambientado con luz blanca que dará un toque relajado pero imponente cada vez que ascienden a él.

El asiento del conductor cuenta con un ajuste eléctrico de ocho vías y un ajuste de altura para la versión Touring HEV; y uno manual de seis vías para la versión Sport HEV. Disfrutarás de elegantes vestiduras en los asientos, compuestos de piel con tela para la versión Sport HEV y de piel para la versión Touring HEV.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_img_completa2',
            [
                'label' => 'Sección Imagen Completa2',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completa2',
            [
                'label' => 'Mostrar Imagen Completa2',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'img_completa2',
            [
                'label' => 'Imagen Completa2',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
                'condition' => [
                    'show_section_img_completa2' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_1_img_completa2',
            [
                'label' => 'Texto 1 Imagen Completa2',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa2' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_2_img_completa2',
            [
                'label' => 'Texto 2 Imagen Completa2',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa2' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_3_img_completa2',
            [
                'label' => 'Texto 3 Imagen Completa2',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa2' => 'yes',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_img_completa3',
            [
                'label' => 'Sección Imagen Completa3',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completa3',
            [
                'label' => 'Mostrar Imagen Completa3',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'img_completa3',
            [
                'label' => 'Imagen Completa3',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
                'condition' => [
                    'show_section_img_completa3' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_1_img_completa3',
            [
                'label' => 'Texto 1 Imagen Completa3',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa3' => 'yes',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_three',
            [
                'label' => 'Sección Tres',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_three',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'sistema_image',
            [
                'label' => 'Imagen Sistema',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/sistema.png',
                ],
            ]
        );

        $this->add_control(
            'title_three',
            [
                'label' => 'Título',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'MÁXIMA CONECTIVIDAD',
            ]
        );

        $this->add_control(
            'text_three',
            [
                'label' => 'Texto',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Honda Civic Híbrido 2025 está perfectamente equipado para ofrecer una máxima conectividad y hacer el viaje más ameno para todos los que lo aborden. Cuenta con sistema de audio, pantalla táctil a color de 9" de alta resolución, así como interfaz touch-screen compatible con funciones de teléfono inteligente.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_img_completatex',
            [
                'label' => 'Sección Imagen Completatex',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completatex',
            [
                'label' => 'Mostrar Imagen Completatex',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'img_completatex',
            [
                'label' => 'Imagen Completatex',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
                'condition' => [
                    'show_section_img_completatex' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_1_img_completatex',
            [
                'label' => 'Texto 1 Imagen Completatex',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completatex' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_2_img_completatex',
            [
                'label' => 'Texto 2 Imagen Completatex',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completatex' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_3_img_completatex',
            [
                'label' => 'Texto 3 Imagen Completatex',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completatex' => 'yes',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_five',
            [
                'label' => 'Sección Cinco',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_five',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'interiores_image_five',
            [
                'label' => 'Imagen Interiores Cinco',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/interiores_cinco.png',
                ],
            ]
        );

        $this->add_control(
            'title_five',
            [
                'label' => 'Título Cinco',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'TÍTULO DE LA SECCIÓN CINCO',
            ]
        );

        $this->add_control(
            'text_five',
            [
                'label' => 'Texto Cinco',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Texto descriptivo para la sección cinco del Honda Civic Híbrido 2025.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_fiveI',
            [
                'label' => 'Sección CincoI',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_fiveI',
            [
                'label' => 'Mostrar esta secciónI',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'interiores_image_fiveI',
            [
                'label' => 'Imagen Interiores CincoI',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/interiores_cinco.png',
                ],
            ]
        );

        $this->add_control(
            'title_fiveI',
            [
                'label' => 'Título CincoI',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'TÍTULO DE LA SECCIÓN CINCOI',
            ]
        );

        $this->add_control(
            'text_fiveI',
            [
                'label' => 'Texto CincoI',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Texto descriptivo para la sección cinco del Honda Civic Híbrido 2025.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_four',
            [
                'label' => 'Sección Cuatro',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_four',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'civic_image_four',
            [
                'label' => 'Imagen Civic Sección Cuatro',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/civic_seccion_cuatro.png',
                ],
            ]
        );

        $this->add_control(
            'title_four',
            [
                'label' => 'Título Sección Cuatro',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'TÍTULO DE LA SECCIÓN CUATRO',
            ]
        );

        $this->add_control(
            'text_four',
            [
                'label' => 'Texto Sección Cuatro',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Texto descriptivo para la sección cuatro del Honda Civic Híbrido 2025.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_img_completaonly',
            [
                'label' => 'Sección Imagen Completaonly',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completaonly',
            [
                'label' => 'Mostrar Imagen Completaonly',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'texto_1_img_completaonly',
            [
                'label' => 'Texto 1 Imagen Completaonly',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completaonly' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_2_img_completaonly',
            [
                'label' => 'Texto 2 Imagen Completaonly',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completaonly' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_3_img_completaonly',
            [
                'label' => 'Texto 3 Imagen Completaonly',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completaonly' => 'yes',
                ],
            ]
        );


        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_img_completa5',
            [
                'label' => 'Sección Imagen Completa5',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completa5',
            [
                'label' => 'Mostrar Imagen Completa5',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'img_completa5',
            [
                'label' => 'Imagen Completa5',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
                'condition' => [
                    'show_section_img_completa5' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_1_img_completa5',
            [
                'label' => 'Texto 1 Imagen Completa5',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa5' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_2_img_completa5',
            [
                'label' => 'Texto 2 Imagen Completa5',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa5' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_3_img_completa5',
            [
                'label' => 'Texto 3 Imagen Completa5',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa5' => 'yes',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_auto',
            [
                'label' => 'Sección Auto',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_auto',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'auto_image',
            [
                'label' => 'Imagen Auto',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/auto.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_img_completaonly2',
            [
                'label' => 'Sección Imagen Completaonly2',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completaonly2',
            [
                'label' => 'Mostrar Imagen Completaonly2',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'texto_1_img_completaonly2',
            [
                'label' => 'Texto 1 Imagen Completaonly2',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completaonly2' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_2_img_completaonly2',
            [
                'label' => 'Texto 2 Imagen Completaonly2',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completaonly2' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_3_img_completaonly2',
            [
                'label' => 'Texto 3 Imagen Completaonly2',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completaonly2' => 'yes',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_img_completa',
            [
                'label' => 'Sección Imagen Completa',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_img_completa',
            [
                'label' => 'Mostrar Imagen Completa',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'no',
            ]
        );

        $this->add_control(
            'img_completa',
            [
                'label' => 'Imagen Completa',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '',
                ],
                'condition' => [
                    'show_section_img_completa' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_1_img_completa',
            [
                'label' => 'Texto 1 Imagen Completa',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_2_img_completa',
            [
                'label' => 'Texto 2 Imagen Completa',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'texto_3_img_completa',
            [
                'label' => 'Texto 3 Imagen Completa',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '',
                'condition' => [
                    'show_section_img_completa' => 'yes',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_velocimetroimages',
            [
                'label' => 'Sección Velocímetroimages',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_velocimetroimages',
            [
                'label' => 'Mostrar esta secciónimages',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'velocimetro_imageimages',
            [
                'label' => 'Imagen Velocímetroimages',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/velocimetro.png',
                ],
            ]
        );

        $this->add_control(
            'velocimetro_imageimages2',
            [
                'label' => 'Imagen Velocímetroimages2',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/velocimetro.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_velocimetro',
            [
                'label' => 'Sección Velocímetro',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_velocimetro',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'velocimetro_image',
            [
                'label' => 'Imagen Velocímetro',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/velocimetro.png',
                ],
            ]
        );

        $this->add_control(
            'title_velocimetro',
            [
                'label' => 'Título Velocímetro',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'POTENCIA Y EFICIENCIA',
            ]
        );

        $this->add_control(
            'text_velocimetro',
            [
                'label' => 'Texto Velocímetro',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'El performance de Honda Civic Híbrido 2025 nos demuestra su poder con un motor de aleación de aluminio, con 4 cilindros en línea 2.0L de 16 válvulas DOHC con VTEC® 139 hp @ 6,000 rpm*, 134 lb/pie @ 4,500 rpm*. Con un motor de tracción 181 hp @ 5,000 -6,000rpm*, 232 lb/pie @ 0-2,000 rpm* Potencia neta 200 hp @ 6,000 rpm* y torque neto 232 lb/pie @ 0-2,000 rpm*.

Gracias a su chasis, contarás con una mejor dinámica de conducción. También cuenta con dirección geosensible de cremallera y doble piñón con Asistencia Eléctrica (EPS), que sin duda aporta tranquilidad extra al estar tras el volante.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_senal',
            [
                'label' => 'Sección Señal',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_senal',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'senal_image',
            [
                'label' => 'Imagen Señal',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/senal.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_threec',
            [
                'label' => 'Sección Tresc',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_threec',
            [
                'label' => 'Mostrar esta secciónc',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'sistema_imagec',
            [
                'label' => 'Imagen Sistemac',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/sistema.png',
                ],
            ]
        );

        $this->add_control(
            'title_threec',
            [
                'label' => 'Título',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'MÁXIMA CONECTIVIDADc',
            ]
        );

        $this->add_control(
            'text_threec',
            [
                'label' => 'Texto',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Honda Civic Híbrido 2025 está perfectamente equipado para ofrecer una máxima conectividad y hacer el viaje más ameno para todos los que lo aborden. Cuenta con sistema de audio, pantalla táctil a color de 9" de alta resolución, así como interfaz touch-screen compatible con funciones de teléfono inteligente.',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_seguridad',
            [
                'label' => 'Sección Seguridad',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_seguridad',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'title_seguridad',
            [
                'label' => 'Título Seguridad',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'PROYECTA Y DA SEGURIDAD',
            ]
        );

        $this->add_control(
            'text_seguridad',
            [
                'label' => 'Texto Seguridad',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'La suite de seguridad integral de Honda Civic Híbrido 2025, incluye tecnologías avanzadas como Asistencia a la Estabilidad del Vehículo (VSA), sensores de estacionamiento, Sistema de Asistencia para Arranque en Pendiente (HSA), cierre de seguros automático y Sistema Electrónico de Distribución de Frenado (EBD).

Cuenta con Honda Sensing® que incluye en todas sus versiones lo siguiente:',
            ]
        );

        for ($i = 1; $i <= 9; $i++) {
            $this->add_control(
                'show_grid_item_' . $i,
                [
                    'label' => 'Mostrar ítem ' . $i,
                    'type' => \Elementor\Controls_Manager::SWITCHER,
                    'label_on' => 'Sí',
                    'label_off' => 'No',
                    'return_value' => 'yes',
                    'default' => 'yes',
                ]
            );

            $this->add_control(
                'grid_image_' . $i,
                [
                    'label' => 'Imagen Grid ' . $i,
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => '/img/modelos/civic_hybrid_2025/img' . $i . '-grid.png',
                    ],
                    'condition' => [
                        'show_grid_item_' . $i => 'yes',
                    ],
                ]
            );

            $this->add_control(
                'grid_text_' . $i,
                [
                    'label' => 'Texto Grid ' . $i,
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => 'Texto para la imagen ' . $i,
                    'condition' => [
                        'show_grid_item_' . $i => 'yes',
                    ],
                ]
            );
        }

        $this->end_controls_section();

        $this->start_controls_section(
            'section_nom',
            [
                'label' => 'Sección NOM',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_nom',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'nom_title',
            [
                'label' => 'Título NOM',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'En Honda siempre nos preocupamos por que la seguridad también sea avanzada.',
            ]
        );

        $this->add_control(
            'nom_text',
            [
                'label' => 'Texto NOM',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Este vehículo integra los dispositivos de seguridad obligatorios de conformidad con la NOM-194-SE-2021 e incorpora los dispositivos de seguridad adicionales voluntarios.',
            ]
        );

        $this->add_control(
            'nom_image',
            [
                'label' => 'Imagen NOM',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/wp-content/uploads/2024/01/nom-seguridad.png',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_360_view',
            [
                'label' => 'Sección Vista 360',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_360_view',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'iframe_360_src',
            [
                'label' => 'URL de Vista 360',
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://www.example.com/vista-360',
                'default' => [
                    'url' => 'https://www.honda.mx/autos/civic/exterior_360',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_car_selector',
            [
                'label' => 'Selector de Autos',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_car_selector',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'estilo_autos_text',
            [
                'label' => 'Texto "TU ESTILO"',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'TU ESTILO',
            ]
        );

        $this->add_control(
            'aviso_autos_text',
            [
                'label' => 'Texto de aviso',
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'Imágenes con fines ilustrativos, de las combinaciones de colores pueden existir variaciones en el equipamiento.',
            ]
        );

        $this->add_control(
            'versiones_text',
            [
                'label' => 'Texto "VERSIONES"',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'VERSIONES',
            ]
        );

        $this->add_control(
            'colores_exteriores_text',
            [
                'label' => 'Texto "COLORES EXTERIORES"',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'COLORES EXTERIORES',
            ]
        );

        $this->add_control(
            'colores_interiores_text',
            [
                'label' => 'Texto "COLORES INTERIORES"',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'COLORES INTERIORES',
            ]
        );

        $car_types = ['sport', 'touring'];
        $colors = ['red', 'blue', 'green', 'black', 'white', 'silver', 'gray'];

        foreach ($car_types as $type) {
            foreach ($colors as $color) {
                $this->add_control(
                    $color . '_car_' . $type .'_image',
                    [
                        'label' => 'Imagen ' . ucfirst($color) . ' ' . ucfirst($type),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => '/img/modelos/civic_hybrid_2025/' . $color . '_' . $type . '.png',
                        ],
                    ]
                );
            }
        }

        $color_options = [
            'blanco' => 'Blanco Platino',
            'gris' => 'Plata Solar',
            'gris_oscuro' => 'Gris Cosmico',
            'azul' => 'Gris Meteoro',
            'red' => 'Rojo Rally',
            'azul_o' => 'Azul Océano',
            'negro' => 'Negro Cristal'
        ];

        foreach ($color_options as $color_key => $color_name) {
            $this->add_control(
                $color_key . '_color_image',
                [
                    'label' => 'Imagen color ' . $color_name,
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => '/img/modelos/civic_hybrid_2025/' . $color_key . '.png',
                    ],
                ]
            );

            $this->add_control(
                $color_key . '_color_text',
                [
                    'label' => 'Texto color ' . $color_name,
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => $color_name,
                ]
            );
        }

        $this->add_control(
            'interior_negro_image',
            [
                'label' => 'Imagen Interior Negro',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/interior-negro.png',
                ],
            ]
        );

        $this->add_control(
            'interior_negro_text',
            [
                'label' => 'Texto Interior Negro',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Tela Con Piel Negra',
            ]
        );

        $this->add_control(
            'interior_plata_image',
            [
                'label' => 'Imagen Interior Plata',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/plata_interior.png',
                ],
            ]
        );

        $this->add_control(
            'interior_plata_text',
            [
                'label' => 'Texto Interior Plata',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Piel Gris',
            ]
        );

        $this->add_control(
            'blanco_platino_sport_image',
            [
                'label' => 'Auto Blanco Platino Sport',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/blanco_platino.png',
                ],
            ]
        );

        $this->add_control(
            'negro_cristal2_sport_image',
            [
                'label' => 'Auto Negro Cristal 2 Sport',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/negro_cristal2.png',
                ],
            ]
        );

        $this->add_control(
            'gris_cosmico_sport_image',
            [
                'label' => 'Auto Gris Cósmico Sport',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/gris_cosmico.png',
                ],
            ]
        );

        $this->add_control(
            'rojo_rally2_sport_image',
            [
                'label' => 'Auto Rojo Rally 2 Sport',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/rojo_rally2.png',
                ],
            ]
        );

        $this->add_control(
            'rojo_rally_sport_image',
            [
                'label' => 'Auto Rojo Rally Sport',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/rojo_rally.png',
                ],
            ]
        );

        $this->add_control(
            'azul_oceanico_sport_image',
            [
                'label' => 'Auto Azul Oceánico Sport',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/azul_oceanico.png',
                ],
            ]
        );

        $this->add_control(
            'blanco_platino_touring_image',
            [
                'label' => 'Auto Blanco Platino Touring',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/blanco_platino.png',
                ],
            ]
        );

        $this->add_control(
            'negro_cristal2_touring_image',
            [
                'label' => 'Auto Negro Cristal 2 Touring',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/negro_cristal2.png',
                ],
            ]
        );

        $this->add_control(
            'negro_cristal_touring_image',
            [
                'label' => 'Auto Negro Cristal Touring',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/negro_cristal.png',
                ],
            ]
        );

        $this->add_control(
            'rojo_rally_touring_image',
            [
                'label' => 'Auto Rojo Rally Touring',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => '/img/modelos/civic_hybrid_2025/rojo_rally.png',
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'version_name',
            [
                'label' => 'Nombre de la Versión',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Nueva Versión',
            ]
        );

        $repeater->add_control(
            'version_colors',
            [
                'label' => 'Colores',
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'color_name',
                        'label' => 'Nombre del Color',
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => 'Nuevo Color',
                    ],
                    [
                        'name' => 'color_image',
                        'label' => 'Imagen del Auto',
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'color_swatch_image',
                        'label' => 'Imagen de Muestra de Color',
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'title_field' => '{{{ color_name }}}',
            ]
        );

        $this->add_control(
            'car_versions',
            [
                'label' => 'Versiones de Autos',
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'version_name' => 'Sport HEV',
                        'version_colors' => [
                            [
                                'color_name' => 'Blanco Platino',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/blanco.png'
                                ],
                            ],
                            [
                                'color_name' => 'Negro Cristal',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/negro.png'
                                ],
                            ],
                        ],
                    ],
                    [
                        'version_name' => 'Touring HEV',
                        'version_colors' => [
                            [
                                'color_name' => 'Rojo Rally',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/rojo.png'
                                ],
                            ],
                            [
                                'color_name' => 'Azul Océano',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/azul_o.png'
                                ],
                            ],
                        ],
                    ],
                ],
                'title_field' => '{{{ version_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_dynamic_car_selector',
            [
                'label' => 'Selector Dinámico de Autos',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_dynamic_car_selector',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'version_name',
            [
                'label' => 'Nombre de la Versión',
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Nueva Versión',
            ]
        );

        $repeater->add_control(
            'version_colors',
            [
                'label' => 'Colores Exteriores',
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'color_name',
                        'label' => 'Nombre del Color',
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => 'Nuevo Color',
                    ],
                    [
                        'name' => 'color_image',
                        'label' => 'Imagen del Auto',
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name' => 'color_swatch_image',
                        'label' => 'Imagen de Muestra de Color',
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'title_field' => '{{{ color_name }}}',
            ]
        );

        $repeater->add_control(
            'interior_colors',
            [
                'label' => 'Colores Interiores',
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'interior_color_name',
                        'label' => 'Nombre del Color Interior',
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => 'Nuevo Color Interior',
                    ],
                    [
                        'name' => 'interior_color_image',
                        'label' => 'Imagen del Interior',
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                ],
                'title_field' => '{{{ interior_color_name }}}',
            ]
        );

        $this->add_control(
            'dynamic_car_versions',
            [
                'label' => 'Versiones de Autos',
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'version_name' => 'Sport HEV',
                        'version_colors' => [
                            [
                                'color_name' => 'Blanco Platino',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/blanco.png'
                                ],
                            ],
                            [
                                'color_name' => 'Negro Cristal',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/negro.png'
                                ],
                            ],
                        ],
                        'interior_colors' => [
                            [
                                'interior_color_name' => 'Tela Con Piel Negra',
                                'interior_color_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/interior-negro.png'
                                ],
                            ],
                        ],
                    ],
                    [
                        'version_name' => 'Touring HEV',
                        'version_colors' => [
                            [
                                'color_name' => 'Rojo Rally',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/rojo.png'
                                ],
                            ],
                            [
                                'color_name' => 'Azul Océano',
                                'color_swatch_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/azul_o.png'
                                ],
                            ],
                        ],
                        'interior_colors' => [
                            [
                                'interior_color_name' => 'Piel Gris',
                                'interior_color_image' => [
                                    'url' => '/img/modelos/civic_hybrid_2025/interior-gris.png'
                                ],
                            ],
                        ],
                    ],
                ],
                'title_field' => '{{{ version_name }}}',
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_hybrid_buttons',
            [
                'label' => 'Botones Hybrid',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_hybrid_buttons',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'brochure_url',
            [
                'label' => 'URL del Brochure',
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://tu-sitio.com/brochure.pdf',
                'default' => [
                    'url' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->add_control(
            'specs_url',
            [
                'label' => 'URL de Especificaciones',
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://tu-sitio.com/especificaciones',
                'default' => [
                    'url' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_action_buttons',
            [
                'label' => 'Botones de Acción',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_action_buttons',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'brochure_pdf',
            [
                'label' => 'PDF del Brochure',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'media_type' => 'application/pdf',
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $this->add_control(
            'specifications_pdf',
            [
                'label' => 'PDF de Especificaciones',
                'type' => \Elementor\Controls_Manager::MEDIA,
                'media_type' => 'application/pdf',
                'default' => [
                    'url' => '',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_test_drive',
            [
                'label' => 'Prueba de Manejo',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_test_drive',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_cotizador',
            [
                'label' => 'Cotizador',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_cotizador',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_contacto',
            [
                'label' => 'Contacto',
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'show_section_contacto',
            [
                'label' => 'Mostrar esta sección',
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => 'Sí',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => 'yes',
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <?php if ( 'yes' === $settings['show_content_section'] ) : ?>
        <section id="principal" class="text-white">
            <div id="portada" style="background-image: url('<?php echo $settings['background_image']['url']; ?>'); background-size: cover; background-position: center;">
                <img id="logo" src="<?php echo $settings['logo_image']['url']; ?>" alt="Logo Honda">
                <div class="info-container">
                    <div class="info-container__item">
                        <span class="info-container__item__title">PRECIO DESDE</span>
                        <span class=""><?php echo $settings['precio_desde']; ?></span>
                    </div>
                    <div class="info-container__item">
                        <span class="info-container__item__title">MENSUALIDADES DESDE</span>
                        <span><?php echo $settings['mensualidades_desde']; ?></span>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_one'] ) : ?>
        <section>
            <div class="container-section-one">
                <div class="img-civic-red">
                    <img id="civic" src="<?php echo $settings['civic_red_image']['url']; ?>" alt="Honda Civic Rojo">
                </div>
                <div class="texto-civic-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_one']; ?></h2>
                       <p class="text-civic"><?php echo $settings['text_one']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_two'] ) : ?>
        <section>
            <div class="container-section-two">
                <div class="texto-interiores-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_two']; ?></h2>
                       <p class="text-civic"><?php echo nl2br($settings['text_two']); ?></p>
                    </div>
                </div>
                <div class="img-civic-interiores">
                    <img id="interiores" src="<?php echo $settings['interiores_image']['url']; ?>" alt="Interiores Honda Civic">
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completa2'] ) : ?>
            <div class="img-completa-container2">
                <div class="img-completa-wrapper2">
                    <img src="<?php echo esc_url($settings['img_completa2']['url']); ?>" alt="Imagen Completa2" class="img-completa2">
                </div>
                <div class="img-completa-texts2">
                    <p id="text-1" class="img-completa-text2"><?php echo esc_html($settings['texto_1_img_completa2']); ?></p>
                    <p id="text-2" class="img-completa-text2"><?php echo esc_html($settings['texto_2_img_completa2']); ?></p>
                    <p id="text-2" class="img-completa-text2"><?php echo esc_html($settings['texto_3_img_completa2']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completa3'] ) : ?>
            <div class="img-completa-container3">
                <div class="img-completa-wrapper3">
                    <img src="<?php echo esc_url($settings['img_completa3']['url']); ?>" alt="Imagen Completa3" class="img-completa3">
                </div>
                <div class="img-completa-texts3">
                    <p id="text-3" class="img-completa-text3"><?php echo esc_html($settings['texto_1_img_completa3']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_three'] ) : ?>
        <section>
            <div class="container-section-one">
                <div class="img-civic-sistema">
                    <img id="sistema" src="<?php echo $settings['sistema_image']['url']; ?>" alt="Sistema Honda Civic">
                </div>
                <div class="texto-civic-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_three']; ?></h2>
                       <p class="text-civic"><?php echo $settings['text_three']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completatex'] ) : ?>
            <div class="img-completa-containertex">
                <div class="img-completa-textstex">
                    <p id="text-1" class="img-completa-texttex"><?php echo esc_html($settings['texto_1_img_completatex']); ?></p>
                    <p id="text-2" class="img-completa-texttex"><?php echo esc_html($settings['texto_2_img_completatex']); ?></p>
                    <p id="text-2" class="img-completa-texttex"><?php echo esc_html($settings['texto_3_img_completatex']); ?></p>
                </div>
                <div class="img-completa-wrappertex">
                    <img src="<?php echo esc_url($settings['img_completatex']['url']); ?>" alt="Imagen Completatex" class="img-completatex">
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_five'] ) : ?>
        <section>
            <div class="container-section-two">
                <div class="texto-interiores-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_five']; ?></h2>
                       <p class="text-civic"><?php echo nl2br($settings['text_five']); ?></p>
                    </div>
                </div>
                <div class="img-civic-interiores">
                    <img id="interiores-five" src="<?php echo $settings['interiores_image_five']['url']; ?>" alt="Interiores Honda Civic Cinco">
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_fiveI'] ) : ?>
        <section>
            <div class="container-section-two">
                <div class="texto-interiores-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_fiveI']; ?></h2>
                       <p class="text-civic"><?php echo nl2br($settings['text_fiveI']); ?></p>
                    </div>
                </div>
                <div class="img-civic-interiores">
                    <img id="interiores-fiveI" src="<?php echo $settings['interiores_image_fiveI']['url']; ?>" alt="Interiores Honda Civic Cinco">
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completa'] ) : ?>
            <div class="img-completa-container">
                <div class="img-completa-wrapper">
                    <img src="<?php echo esc_url($settings['img_completa']['url']); ?>" alt="Imagen Completa" class="img-completa">
                </div>
                <div class="img-completa-texts">
                    <p id="text-1" class="img-completa-text"><?php echo esc_html($settings['texto_1_img_completa']); ?></p>
                    <p id="text-2" class="img-completa-text"><?php echo esc_html($settings['texto_2_img_completa']); ?></p>
                    <p id="text-2" class="img-completa-text"><?php echo esc_html($settings['texto_3_img_completa']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_four'] ) : ?>
        <section>
            <div class="container-section-one">
                <div class="img-civic-four">
                    <img id="civic-four" src="<?php echo $settings['civic_image_four']['url']; ?>" alt="Imagen Civic Sección Cuatro">
                </div>
                <div class="texto-civic-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_four']; ?></h2>
                       <p class="text-civic"><?php echo $settings['text_four']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completaonly'] ) : ?>
            <div class="img-completa-container">
                <div class="img-completa-texts">
                    <p id="text-1" class="img-completa-text"><?php echo esc_html($settings['texto_1_img_completaonly']); ?></p>
                    <p id="text-2" class="img-completa-text"><?php echo esc_html($settings['texto_2_img_completaonly']); ?></p>
                    <p id="text-2" class="img-completa-text"><?php echo esc_html($settings['texto_3_img_completaonly']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completa5'] ) : ?>
            <div class="img-completa-container5">
                <div class="img-completa-wrapper5">
                    <img src="<?php echo esc_url($settings['img_completa5']['url']); ?>" alt="Imagen Completa5" class="img-completa5">
                </div>
                <div class="img-completa-texts5">
                    <p id="text-1" class="img-completa-text5"><?php echo esc_html($settings['texto_1_img_completa5']); ?></p>
                    <p id="text-2" class="img-completa-text5"><?php echo esc_html($settings['texto_2_img_completa5']); ?></p>
                    <p id="text-2" class="img-completa-text5"><?php echo esc_html($settings['texto_3_img_completa5']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_auto'] ) : ?>
        <section>
            <div class="container-section-auto">
                <img id="auto" src="<?php echo $settings['auto_image']['url']; ?>" alt="Auto Honda">
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_img_completaonly2'] ) : ?>
            <div class="img-completa-container">
                <div class="img-completa-texts">
                    <p id="text-1" class="img-completa-text"><?php echo esc_html($settings['texto_1_img_completaonly2']); ?></p>
                    <p id="text-2" class="img-completa-text"><?php echo esc_html($settings['texto_2_img_completaonly2']); ?></p>
                    <p id="text-2" class="img-completa-text"><?php echo esc_html($settings['texto_3_img_completaonly2']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_velocimetroimages'] ) : ?>
        <section>
            <div class="container-section-one">
                <div class="img-civic-velocimetro">
                    <img id="velocimetroimages" src="<?php echo $settings['velocimetro_imageimages']['url']; ?>" alt="Velocímetro Honda">
                </div>
                <div class="img-civic-velocimetro">
                    <img id="velocimetroimages2" src="<?php echo $settings['velocimetro_imageimages2']['url']; ?>" alt="Velocímetro Honda">
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_velocimetro'] ) : ?>
        <section>
            <div class="container-section-one">
                <div class="img-civic-velocimetro">
                    <img id="velocimetro" src="<?php echo $settings['velocimetro_image']['url']; ?>" alt="Velocímetro Honda">
                </div>
                <div class="texto-civic-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_velocimetro']; ?></h2>
                       <p class="text-civic"><?php echo nl2br($settings['text_velocimetro']); ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_senal'] ) : ?>
        <section>
            <div class="container-section-senal">
                <img id="senal" src="<?php echo $settings['senal_image']['url']; ?>" alt="Señal Honda">
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_threec'] ) : ?>
        <section>
            <div class="container-section-one">
                <div class="img-civic-sistemac">
                    <img id="sistemac" src="<?php echo $settings['sistema_imagec']['url']; ?>" alt="Sistema Honda Civic">
                </div>
                <div class="texto-civic-red">
                    <div class="subcontainer-texts">
                       <h2 class="title-civic"><?php echo $settings['title_threec']; ?></h2>
                       <p class="text-civic"><?php echo $settings['text_threec']; ?></p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_seguridad'] ) : ?>
        <div class="custom-container">
            <h3><?php echo $settings['title_seguridad']; ?></h3>
            <p class="custom-text-container"><?php echo nl2br($settings['text_seguridad']); ?></p>
            <div class="grid-container-one">
                <?php for ($i = 1; $i <= 9; $i++) : ?>
                    <?php if ( 'yes' === $settings['show_grid_item_' . $i] ) : ?>
                        <div class="grid-item-one img-item">
                            <img class="img1-grid" src="<?php echo $settings['grid_image_' . $i]['url']; ?>" alt="Honda Feature <?php echo $i; ?>">
                        </div>
                        <div class="grid-item-one text-item"><?php echo $settings['grid_text_' . $i]; ?></div>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_nom'] ) : ?>
        <div class="nom-container">
            <div>
               <h2 class="nom-title"><?php echo $settings['nom_title']; ?></h2>
               <p class="nom-text"><?php echo $settings['nom_text']; ?></p>
            </div>
            <div class="nom-button-container">
                <span class="nom-click-text">DA CLIC AQUÍ</span>
                <a href="#" class="nom-button">
                    <img src="<?php echo $settings['nom_image']['url']; ?>" alt="NOM Seguridad">
                </a>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_360_view'] ) : ?>
        <div style="width: 100%; height: auto;">
            <iframe
                id="container-360"
                src="<?php echo esc_url($settings['iframe_360_src']['url']); ?>"
                width="100%"
                height="580"
                frameborder="0"
                allowfullscreen
                class="p-0 ml14">
            </iframe>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_car_selector'] ) : ?>
        <div class="car-container">
            <!-- Contenedor de imágenes -->
            <div class="car-images">
                <p class="estilo_autos"><?php echo $settings['estilo_autos_text']; ?></p>
                <!-- Imágenes para Sport HEV -->
                <img src="<?php echo $settings['blanco_platino_sport_image']['url']; ?>" alt="Auto Blanco Sport" class="car-image sport" id="red-car-sport">
                <img src="<?php echo $settings['negro_cristal2_sport_image']['url']; ?>" alt="Auto Negro Cristal 2 Sport" class="car-image sport" id="blue-car-sport">
                <img src="<?php echo $settings['gris_cosmico_sport_image']['url']; ?>" alt="Auto Gris Cósmico Sport" class="car-image sport" id="green-car-sport">
                <img src="<?php echo $settings['rojo_rally2_sport_image']['url']; ?>" alt="Auto Rojo Rally 2 Sport" class="car-image sport" id="black-car-sport">
                <img src="<?php echo $settings['rojo_rally_sport_image']['url']; ?>" alt="Auto Rojo Rally Sport" class="car-image sport" id="white-car-sport">
                <img src="<?php echo $settings['azul_oceanico_sport_image']['url']; ?>" alt="Auto Azul Oceánico Sport" class="car-image sport" id="silver-car-sport">

                <!-- Imágenes para Touring HEV -->
                <img src="<?php echo $settings['blanco_platino_touring_image']['url']; ?>" alt="Auto Blanco Platino Touring" class="car-image touring" id="red-car-touring">
                <img src="<?php echo $settings['negro_cristal2_touring_image']['url']; ?>" alt="Auto Negro Cristal 2 Touring" class="car-image touring" id="blue-car-touring">
                <img src="<?php echo $settings['negro_cristal_touring_image']['url']; ?>" alt="Auto Negro Cristal Touring" class="car-image touring" id="gray-car-touring">
                <img src="<?php echo $settings['rojo_rally_touring_image']['url']; ?>" alt="Auto Rojo Rally Touring" class="car-image touring" id="black-car-touring">
                <p class="aviso_autos"><?php echo $settings['aviso_autos_text']; ?></p>
            </div>

            <div class="container-selector-color">
                <div class="car-options">
                    <div class="versiones">
                        <p><?php echo $settings['versiones_text']; ?></p>
                    </div>
                    <div class="car-options-container">
                        <button class="car-option active" data-type="sport">Sport HEV</button>
                        <button class="car-option" data-type="touring">Touring HEV</button>
                    </div>
                </div>

                <div class="color-exteriores">
                    <p><?php echo $settings['colores_exteriores_text']; ?></p>
                </div>

                <!-- Contenedor de selectores de colores -->
                <div class="color-selectors">
                    <div class="color-option sport">
                        <img class="color-button" data-color="red-car-sport" src="<?php echo $settings['blanco_color_image']['url']; ?>" alt="Auto Blanco Sport">
                        <p><?php echo $settings['blanco_color_text']; ?></p>
                    </div>
                    <div class="color-option sport">
                        <img class="color-button" data-color="blue-car-sport" src="<?php echo $settings['gris_color_image']['url']; ?>" alt="Auto Gris Sport">
                        <p><?php echo $settings['gris_color_text']; ?></p>
                    </div>
                    <div class="color-option sport">
                        <img class="color-button" data-color="green-car-sport" src="<?php echo $settings['gris_oscuro_color_image']['url']; ?>" alt="Auto Gris Oscuro Sport">
                        <p><?php echo $settings['gris_oscuro_color_text']; ?></p>
                    </div>
                    <div class="color-option sport">
                        <img class="color-button" data-color="black-car-sport" src="<?php echo $settings['azul_color_image']['url']; ?>" alt="Auto Azul Sport">
                        <p><?php echo $settings['azul_color_text']; ?></p>
                    </div>
                    <div class="color-option sport">
                        <img class="color-button" data-color="white-car-sport" src="<?php echo $settings['red_color_image']['url']; ?>" alt="Auto Rojo Sport">
                        <p><?php echo $settings['red_color_text']; ?></p>
                    </div>
                    <div class="color-option sport">
                        <img class="color-button" data-color="silver-car-sport" src="<?php echo $settings['azul_o_color_image']['url']; ?>" alt="Auto Azul Oscuro Sport">
                        <p><?php echo $settings['azul_o_color_text']; ?></p>
                    </div>

                    <!-- Colores para Touring HEV -->
                    <div class="color-option touring">
                        <img class="color-button" data-color="red-car-touring" src="<?php echo $settings['blanco_color_image']['url']; ?>" alt="Auto Blanco Touring">
                        <p><?php echo $settings['blanco_color_text']; ?></p>
                    </div>
                    <div class="color-option touring">
                        <img class="color-button" data-color="blue-car-touring" src="<?php echo $settings['gris_color_image']['url']; ?>" alt="Auto Gris Touring">
                        <p><?php echo $settings['gris_color_text']; ?></p>
                    </div>
                    <div class="color-option touring">
                        <img class="color-button" data-color="gray-car-touring" src="<?php echo $settings['negro_color_image']['url']; ?>" alt="Auto Negro Touring">
                        <p><?php echo $settings['negro_color_text']; ?></p>
                    </div>
                    <div class="color-option touring">
                        <img class="color-button" data-color="black-car-touring" src="<?php echo $settings['red_color_image']['url']; ?>" alt="Auto Rojo Touring">
                        <p><?php echo $settings['red_color_text']; ?></p>
                    </div>
                </div>

                <div class="color-interiores">
                    <p><?php echo $settings['colores_interiores_text']; ?></p>
                </div>
                <div class="color-selector-interiores">
                    <div class="color-selector-interiores2 sport">
                        <div class="color-option-interior">
                            <img src="<?php echo $settings['interior_negro_image']['url']; ?>" alt="Interior Negro" class="interior-swatch-image">
                            <p><?php echo $settings['interior_negro_text']; ?></p>
                        </div>
                    </div>
                    <div class="color-selector-interiores touring">
                        <div class="color-option-interior">
                            <img src="<?php echo $settings['interior_plata_image']['url']; ?>" alt="Interior Plata" class="interior-swatch-image">
                            <p><?php echo $settings['interior_plata_text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_interior_swatch'] ) : ?>
        <div class="interior-swatch-container">
            <div class="interior-swatch">
                <div class="interior-swatch-image-container">
                    <img src="<?php echo $settings['interior_plata_image']['url']; ?>" alt="Interior Plata" class="interior-swatch-image">
                    <p><?php echo $settings['interior_plata_text']; ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_dynamic_car_selector'] ) : ?>
        <div class="dynamic-car-versions-container">
            <div class="dynamic-car-images-container">
                <img id="dynamic-selected-car-image" src="" alt="Auto seleccionado">
                <p class="text-selector-dinamico">Imágenes con fines ilustrativos, de las combinaciones de colores pueden existir variaciones en el equipamiento.</p>
            </div>
            <div class="container-selector-color">
                <div class="dynamic-version-selector">
                    <h3 class="versiones">VERSIONES</h3>
                    <div class="dynamic-version-buttons">
                        <?php foreach ( $settings['dynamic_car_versions'] as $index => $version ) : ?>
                            <button class="dynamic-version-button" data-version="<?php echo esc_attr($index); ?>"><?php echo esc_html($version['version_name']); ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="dynamic-color-selector">
                    <h3 class="color-exteriores">COLORES EXTERIORES</h3>
                    <?php foreach ( $settings['dynamic_car_versions'] as $version_index => $version ) : ?>
                        <div class="dynamic-color-options" data-version="<?php echo esc_attr($version_index); ?>" style="display: none;">
                            <?php foreach ( $version['version_colors'] as $color_index => $color ) : ?>
                                <div class="dynamic-color-option" 
                                     data-color-index="<?php echo esc_attr($color_index); ?>"
                                     data-image-url="<?php echo esc_attr($color['color_image']['url']); ?>" >
                                    <img src="<?php echo esc_attr($color['color_swatch_image']['url']); ?>" alt="<?php echo esc_attr($color['color_name']); ?>" class="color-swatch-image">
                                    <span class="color-name"><?php echo esc_html($color['color_name']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Sección de Colores Interiores -->
                <div class="dynamic-interior-color-selector">
                    <h3 class="color-interiores">COLORES INTERIORES</h3>
                    <?php foreach ( $settings['dynamic_car_versions'] as $version_index => $version ) : ?>
                        <div class="dynamic-interior-color-options" data-version="<?php echo esc_attr($version_index); ?>" style="display: none;">
                            <?php foreach ( $version['interior_colors'] as $interior_index => $interior_color ) : ?>
                                <div class="dynamic-interior-color-option"
                                     data-interior-index="<?php echo esc_attr($interior_index); ?>"
                                     data-interior-image-url="<?php echo esc_attr($interior_color['interior_color_image']['url']); ?>">
                                    <img src="<?php echo esc_attr($interior_color['interior_color_image']['url']); ?>"
                                         alt="<?php echo esc_attr($interior_color['interior_color_name']); ?>"
                                         class="dynamic-interior-swatch-image">
                                    <span class="dynamic-interior-color-name"><?php echo esc_html($interior_color['interior_color_name']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_hybrid_buttons'] ) : ?>
        <div class="hybrid-buttons-container">
            <a href="<?php echo esc_url($settings['brochure_url']['url']); ?>" id="hybrid-downloadButton" class="hybrid-button">Descargar Brochure</a>
            <a href="<?php echo esc_url($settings['specs_url']['url']); ?>" id="hybrid-specButton" class="hybrid-button">Ver Especificaciones</a>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_action_buttons'] ) : ?>
        <div class="action-buttons-container">
            <button class="action-button brochure-button" data-pdf-url="<?php echo esc_url($settings['brochure_pdf']['url']); ?>">
                DESCARGAR BROCHURE
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
            </button>
            <button class="action-button configure-button">
                CONFIGURA TU CITY
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2l.64-2.54c.24-.959.24-1.962 0-2.92l-1.07-4.27A3 3 0 0 0 17.66 5H4.34a3 3 0 0 0-2.91 2.27L.36 11.54c-.24.959-.24 1.962 0 2.92L1 17h2"></path><path d="M14 17H9"></path><circle cx="6.5" cy="17.5" r="2.5"></circle><circle cx="16.5" cy="17.5" r="2.5"></circle></svg>
            </button>
            <button class="action-button specs-button" data-pdf-url="<?php echo esc_url($settings['specifications_pdf']['url']); ?>">
                VER ESPECIFICACIONES COMPLETAS
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_test_drive'] ) : ?>
        <div class="hybrid-form-container">
            <h2 class="hybrid-form-title">Solicita una prueba de manejo</h2>
            <form id="hybrid-testDriveForm">
            <div class="hybrid-form-grid">
            <input type="text" name="nombre" class="hybrid-input" placeholder="Nombre" required>
                    <input type="text" name="apellido" class="hybrid-input" placeholder="Apellido Materno" required>
                    <input type="email" name="email" class="hybrid-input" placeholder="E-mail" required>
                    <input type="text" name="estado" class="hybrid-input" placeholder="Estado" required>
                    <select name="ciudad" id="hybrid-ciudad" class="hybrid-select" required>
                        <option value="" disabled selected>Ciudad</option>
                        <option value="CDMX">CDMX</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="San Luis Potosi">San Luis Potosí</option>
                    </select>
                    <select name="distribuidor" id="hybrid-distribuidor" class="hybrid-select" required>
                        <option value="" disabled selected>Distribuidor</option>
                        <!-- Las opciones se llenarán con JavaScript -->
                    </select>
            </div>
            <div class="hybrid-privacy">
                    <a href="#" id="hybrid-privacyLink">Aviso de privacidad</a>
                </div>
                <button type="submit" class="hybrid-submit">Enviar</button>
            </form>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_cotizador'] ) : ?>
            <div class="cotizador-honda-container">
            <h1 class="cotizador-honda-title">Cotizalo</h1>
            <div class="cotizador-honda-version-selector">
                <div class="cotizador-honda-version-btn-container">
                    <button id="cotizador-honda-sportBtn" class="cotizador-honda-version-btn cotizador-honda-active">CIVIC HYBRID SPORT HEV</button>
                    <span id="cotizador-honda-sportPrice" class="cotizador-honda-version-price">$684,900</span>
                </div>
                <div class="cotizador-honda-version-btn-container">
                    <button id="cotizador-honda-touringBtn" class="cotizador-honda-version-btn">CIVIC HYBRID TOURING HEV</button>
                    <span id="cotizador-honda-touringPrice" class="cotizador-honda-version-price">$724,900</span>
                </div>
            </div>
            <div class="container-enganche-plazo">
                <div class="cotizador-honda-option-section">
                    <h2>Elige tu enganche</h2>
                    <div class="cotizador-honda-slider-container">
                        <input type="range" min="20" max="50" step="10" value="20" class="cotizador-honda-slider" id="cotizador-honda-engancheSlider">
                        <div class="cotizador-honda-slider-labels">
                            <button class="cotizador-honda-slider-label" data-value="20">20</button>
                            <button class="cotizador-honda-slider-label" data-value="30">30</button>
                            <button class="cotizador-honda-slider-label" data-value="40">40</button>
                            <button class="cotizador-honda-slider-label" data-value="50">50</button>
                        </div>
                    </div>
                    <div class="cotizador-honda-selected-value">
                        <div class="enganche-plazo-btn">Enganche: <span id="cotizador-honda-engancheValue">20%</span></div>
                        <div id="cotizador-honda-engancheMonto"></div>
                    </div>
                </div>
                <div class="cotizador-honda-option-section">
                    <h2>Elige tu plazo</h2>
                    <div class="cotizador-honda-slider-container">
                        <input type="range" min="12" max="72" step="12" value="12" class="cotizador-honda-slider" id="cotizador-honda-plazoSlider">
                        <div class="cotizador-honda-slider-labels">
                            <button class="cotizador-honda-slider-label" data-value="12">12</button>
                            <button class="cotizador-honda-slider-label" data-value="24">24</button>
                            <button class="cotizador-honda-slider-label" data-value="36">36</button>
                            <button class="cotizador-honda-slider-label" data-value="48">48</button>
                            <button class="cotizador-honda-slider-label" data-value="60">60</button>
                            <button class="cotizador-honda-slider-label" data-value="72">72</button>
                        </div>
                    </div>
                    <div class="cotizador-honda-selected-value">
                        <div class="enganche-plazo-btn">Plazo: <span id="cotizador-honda-plazoValue">12 meses</span></div>
                        <div class="mensualidad">Mensualidad: <span id="cotizador-honda-plazoMensualidad"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotizador-honda-form-container">
            <h2 class="cotizador-honda-form-title">Déjanos tus datos y en breve nos comunicaremos contigo.</h2>
            <form id="cotizador-honda-form" class="cotizador-honda-form">
                <div class="cotizador-honda-form-grid">
                    <input type="text" name="nombre" class="cotizador-honda-input" placeholder="Nombre" required>
                    <input type="text" name="apellido" class="cotizador-honda-input" placeholder="Apellido Materno" required>
                    <input type="email" name="email" class="cotizador-honda-input" placeholder="E-mail" required>
                    <input type="text" name="estado" class="cotizador-honda-input" placeholder="Estado" required>
                    <select name="ciudad" id="cotizador-honda-ciudad" class="cotizador-honda-select" required>
                        <option value="" disabled selected>Ciudad</option>
                        <option value="CDMX">CDMX</option>
                        <option value="Guadalajara">Guadalajara</option>
                        <option value="San Luis Potosi">San Luis Potosí</option>
                    </select>
                    <select name="distribuidor" id="cotizador-honda-distribuidor" class="cotizador-honda-select" required>
                        <option value="" disabled selected>Distribuidor</option>
                    </select>
                </div>
                <div class="cotizador-honda-privacy">
                    <a href="#" id="cotizador-honda-privacyLink">Aviso de privacidad</a>
                </div>
                <button type="submit" class="cotizador-honda-submit">Enviar</button>
            </form>
            <div class="vigencia-cotizador">
                <p>Vigencia del 01 al 30 de noviembre de 2024 o hasta agotar existencias. Precio sugerido. Tasa base de 9.99%. Aplica en la compra de Honda® Civic Hybrid en versión Sport HEV en modelo 2025; con un plazo de (24) VEINTICUATRO MESES y enganche de 50% (CINCUENTA POR CIENTO) con un CAT de 18.9% sin IVA promedio informativo que considera el costo del seguro de vida, seguro de daños y comisión por apertura de crédito. No incluye accesorios del vehículo. Crédito exclusivo con Honda Finance. Aplican restricciones. Para mayor información acerca de requisitos y opciones de financiamiento visite su Distribuidor Honda® más cercano.
                </br>
                </br>
                Este cotizador representa un ejercicio aritmético, el cual incluye parámetros estándar y no representa el monto de pago real de los planes de financiamiento que comunican es este sitio. Para obtener mayor detalle le recomendamos visitar su Distribuidor Honda más cercano, para poder realizar una cotizaciónpersonalizada a sus requerimientos financieros.</p>
            </div>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_contacto'] ) : ?>
            <div class="contacto-container">
            <h1 class="contacto-title">Contácto</h1>
            <p class="contacto-subtitle">Llámanos al 800-368-8500 o déjanos un mensaje.</p>

            <form id="contactoForm" class="contacto-form">
                <select class="contacto-select" name="tema" required>
                    <option value="" disabled selected>Tema</option>
                    <option value="consulta">Consulta</option>
                    <option value="queja">Queja</option>
                    <option value="otro">Otro</option>
                </select>

                <textarea class="contacto-textarea" name="mensaje" placeholder="Mensaje" required></textarea>

                <input type="text" class="contacto-input" name="nombre" placeholder="Nombre" required>
                <input type="text" class="contacto-input" name="primerApellido" placeholder="Primer Apellido" required>
                <input type="text" class="contacto-input" name="segundoApellido" placeholder="Segundo Apellido" required>
                <input type="email" class="contacto-input" name="correo" placeholder="Correo" required>

                <select class="contacto-select" name="estado" id="estadoSelect" required>
                    <option value="" disabled selected>Estado</option>
                </select>

                <input type="text" class="contacto-input" name="ciudad" placeholder="Ciudad" required>
                <input type="tel" class="contacto-input" name="telefono" placeholder="Teléfono" required>

                <button type="submit" class="contacto-submit">Enviar</button>
            </form>
        </div>
        <?php endif; ?>

        <?php if ( 'yes' === $settings['show_section_action_buttons'] ) : ?>
            <div class="action-buttons-container">
                <?php if ( ! empty( $settings['brochure_pdf']['url'] ) ) : ?>
                    <a href="<?php echo esc_url( $settings['brochure_pdf']['url'] ); ?>" class="button brochure-button" target="_blank">Descargar Brochure</a>
                <?php endif; ?>
                <?php if ( ! empty( $settings['specifications_pdf']['url'] ) ) : ?>
                    <a href="<?php echo esc_url( $settings['specifications_pdf']['url'] ); ?>" class="button specs-button" target="_blank">Especificaciones</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php
    }
}