<?php
require_once( 'GenChar.php' );
$g = new GenChar;
?>
<!doctype html>
<html>
<head>
  <title>GenChar: WOW Charname Generator</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body>
<div class="min-h-full">
  <header class="pb-24 bg-indigo-600">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="relative py-5 flex items-center justify-center lg:justify-between">
        <div class="absolute left-0 flex items-center flex-shrink-0 lg:static">
          <a href="index.php" class="text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
            </svg>
          </a>
          <a href="index.php" class="text-white ml-3">GenChar</a>
        </div>

        <!-- Right section on desktop -->
        <div class="hidden lg:ml-4 lg:flex lg:items-center lg:pr-0.5">
          <a href="https://gens-der-allianz.de" class="flex items-center text-indigo-100 text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> <span class="mr-2">Gens der Allianz</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
          </a>
        </div>

      </div>
      <div class="hidden lg:block border-t border-white border-opacity-20 py-5">
        <div class="grid grid-cols-3 gap-8 items-center">
          <div class="col-span-2">
            <nav class="flex space-x-4">
              <a href="index.php" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="page"> Generator </a>
              <a href="syllables.php?class=demonhunter" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Demonhunter </a>
              <a href="syllables.php?class=druid" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Druid </a>
              <a href="syllables.php?class=hunter" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Hunter </a>
              <a href="syllables.php?class=priest" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Priest </a>
              <a href="syllables.php?class=warlock" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Warlock </a>
              <a href="syllables.php?class=warrior" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10"> Warrior </a>
            </nav>
          </div>
          <div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="-mt-24 pb-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="sr-only">GenChar: WOW Charname Generator</h1>
      <!-- Main 3 column grid -->
      <div class="grid grid-cols-1 gap-4 items-start lg:grid-cols-3 lg:gap-8">
        <!-- Left column -->
        <div class="grid grid-cols-1 gap-4 lg:col-span-2">
          <section aria-labelledby="section-1-title">
            <h2 class="sr-only" id="section-1-title">Section title</h2>
            <div class="rounded-lg bg-white overflow-hidden shadow">
              <div class="p-6 prose">

                <form>
                <button type="submit" class="flex items-center bg-fuchsia-600 p-3 border ring-2 hover:bg-fuchsia-500">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                  </svg>
                  <span class="ml-3 font-bold">Generate Charname!</span>
                </button>
                </form>

                <hr>



                <?php

                echo '<div class="ring-2">';
                  echo '<div class="flex items-center not-prose bg-gray-200">';
                  echo $g->get_class_icon('warlock');
                  echo '<span class="ml-2 text-2xl">Warlock</span>';
                  echo '</div>';

                  echo '<div class="not-prose p-2">';
                  echo '<p class="text-5xl font-mono">'. $g->char_name( 'warlock', 3 ) . '</p>';
                  echo '</div>';
                echo '</div>';
                echo '<hr>';


                echo '<div class="ring-2">';
                  echo '<div class="flex items-center not-prose bg-gray-200">';
                  echo $g->get_class_icon('demonhunter');
                  echo '<span class="ml-2 text-2xl">Demonhunter</span>';
                  echo '</div>';

                  echo '<div class="not-prose p-2">';
                  echo '<p class="text-5xl font-mono">'. $g->char_name( 'demonhunter', 3 ) . '</p>';
                  echo '</div>';
                echo '</div>';
                echo '<hr>';


                echo '<div class="ring-2">';
                  echo '<div class="flex items-center not-prose bg-gray-200">';
                  echo $g->get_class_icon('warrior');
                  echo '<span class="ml-2 text-2xl">Warrior</span>';
                  echo '</div>';

                  echo '<div class="not-prose p-2">';
                  echo '<p class="text-5xl font-mono">'. $g->char_name( 'warrior', 3 ) . '</p>';
                  echo '</div>';
                echo '</div>';
                echo '<hr>';


                echo '<div class="ring-2">';
                  echo '<div class="flex items-center not-prose bg-gray-200">';
                  echo $g->get_class_icon('druid');
                  echo '<span class="ml-2 text-2xl">Druid</span>';
                  echo '</div>';

                  echo '<div class="not-prose p-2">';
                  echo '<p class="text-5xl font-mono">'. $g->char_name( 'druid', 3 ) . '</p>';
                  echo '</div>';
                echo '</div>';
                echo '<hr>';


                echo '<div class="ring-2">';
                  echo '<div class="flex items-center not-prose bg-gray-200">';
                  echo $g->get_class_icon('hunter');
                  echo '<span class="ml-2 text-2xl">Hunter</span>';
                  echo '</div>';

                  echo '<div class="not-prose p-2">';
                  echo '<p class="text-5xl font-mono">'. $g->char_name( 'hunter', 3 ) . '</p>';
                  echo '</div>';
                echo '</div>';
                echo '<hr>';


                echo '<div class="ring-2">';
                  echo '<div class="flex items-center not-prose bg-gray-200">';
                  echo $g->get_class_icon('priest');
                  echo '<span class="ml-2 text-2xl">Priest</span>';
                  echo '</div>';

                  echo '<div class="not-prose p-2">';
                  echo '<p class="text-5xl font-mono">'. $g->char_name( 'priest', 3 ) . '</p>';
                  echo '</div>';
                echo '</div>';
                echo '<hr>';


                ?>


              </div>
            </div>
          </section>
        </div>

        <!-- Right column -->
        <div class="grid grid-cols-1 gap-4">
          <section aria-labelledby="section-2-title">
            <h2 class="sr-only" id="section-2-title">GenChar Info</h2>
            <div class="rounded-lg bg-white overflow-hidden shadow">
              <div class="p-6 prose">
                <h2>GenChar, a WOW Charname Generator</h2>
                <p>WOW Charname Generator from
                  <a href="https://gens-der-allianz.de" class="inline-flex items-center"><span class="mr-2">Gens-der-Allianz</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg></a>, Allianz Fraction on Thrall.
                </p>
                <hr>
                <h2>Available Char Classes</h2>
                <p>So far, these Char Classes are available: <strong>
                  <?php $g->print_classes(); ?>
                </strong></p>

                <hr>
                <?php $g->print_stats( ); ?>
                <hr>

                <p>This Software Project is on GITHUB:
                  <a href="https://github.com/phoenixseo/genchar" class="flex items-center">
                    <span class="mr-2">https://github.com/phoenixseo/genchar</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                  </a></p>

              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </main>


  <footer>
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
      <div class="border-t border-gray-200 py-8 text-sm text-gray-500 text-center sm:text-left"><span class="block sm:inline">&copy; 2022 Gens der Allianz</span> <span class="block sm:inline">All rights reserved.</span></div>
    </div>
  </footer>
</div>



</body>
</html>
