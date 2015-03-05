<footer>
  <div class="page-margin inside-footer">
    <?php print render($search_form_bottom); ?>
    <section id="active-clusters-list">
      <h3><?php print t('Featured Responses'); ?></h3>
      <?php print render($page['footer']['hot_responses']); ?>
      <h3 class="general-information"><?php print t('General Information'); ?></h3>
      <?php print render($page['footer']['general_information']); ?>
    </section>

    <section id="regions-list">
      <h3><?php print t('Shelter information is available on the following countries:'); ?></h3>
      <?php print render($page['footer']['menu_regions']); ?>
    </section>
  </div>

  <div class="page-margin inside-footer">
    <section id="contributions">
      <h3><?php print t('This website is made possible through the financial and in-kind contributions of:'); ?></h3>
      <ul class="contributors clearfix">
        <li class="contributor">
          <?php print theme('image', array(
            'path' => drupal_get_path('theme', 'shelter') . '/assets/images/humanitarian-aid.png',
            'alt' => t('Humanitarian Aid and Civil Protection'),
          )); ?>
        </li>
        <li class="contributor">
          <?php print theme('image', array(
            'path' => drupal_get_path('theme', 'shelter') . '/assets/images/canadian-red-cross.png',
            'alt' => t('Canadian Red Cross'),
          )); ?>
        </li>
        <li class="contributor">
          <?php print theme('image', array(
            'path' => drupal_get_path('theme', 'shelter') . '/assets/images/gov-canada.png',
            'alt' => t('Governement of Canada'),
          )); ?>
        </li>
      </ul>
    </section>
  </div>
</footer>
