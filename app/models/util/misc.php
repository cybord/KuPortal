<?php

/**
 * KuPortal - KumbiaPHP Portal
 * PHP version 5
 * LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * Clase que contienes varias funciones de utilidad.
 * 
 * @package Util
 * @license http://www.gnu.org/licenses/gpl.txt GNU GENERAL PUBLIC LICENSE version 3.
 * @author Henry Stivens Adarme Muñoz <henry.stivens@gmail.com>
 */
class Misc{
    /**
     * Genera una clave aleatoria, dado un tamaño.
     *
     * @param int $length
     */
    public static function generarClave($length) {
        $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
        $cad = '';
        for ($i = 0; $i < $length; $i++) {
            $cad .= substr($str, rand(0, 62), 1);
        }
        return $cad;
    }
}
?>
