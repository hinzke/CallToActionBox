<?php

// src/CallToActionBox.php
ClassLoader::addNamespace('CallToActionBox', 'system/modules/CallToActionBox/src');

// src/Element/CallToActionElement.php
ClassLoader::addClasses(array(
    'CallToActionBox\Element\CallToActionElement' => 'system/modules/CallToActionBox/src/Element/CallToActionElement.php',
));
