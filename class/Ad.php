<?php
interface Ad
{
    public function index(); // rodo skelbimu sarasa
    public function create(); // rodo tuscia skelbimo sukurimo forma
    public function save(array $request); // uzsaugo skelbima
    public function edit($id); // rodo uzpildyto skelbimo sukurimo forma
    public function update($id, array $request); // uzsaugo skelbima
    public function destroy($id); // sunaikina skelbima
}