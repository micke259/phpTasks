<?php
//Дана папка с файлами. Удалите из этой папки все файлы с заданным расширением.

array_map('unlink', glob('../../texts/level_7/63/deletables/*.txt'));