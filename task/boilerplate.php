<?php 
    namespace task;
    
    class Animal{
        public function __construct($data)
        {
            $this->data = $data;
        }

        public function index()
        {
            foreach($this->data as $hewan){
                echo $hewan."<br>";
            }
        }

        public function store($data)
        {
            array_push($this->data,$data);
        }

        public function update($index, $data)
        {
            $this->data[$index] = $data;
        }

        public function destroy($index, $data)
        {
            arrat_splice($this->data,$index)
        }
    }
    
    #memuat object
    #mengirim data hewan ke construct
    $animal = new Animal([]);

        echo "Index - Menampilkan seluruh hewan <br>";
        $animal->index();
        echo "<br>";

        echo "Store - Menambahkan hewan baru <br>";
        $animal->store('burung'); 
        $animal->index();
        echo "<br>";

        echo "update - mengupdate hewan <br>";
        $animal->update(0, 'Kucing Anggora');
        $animal->index();

        echo "destroy - menghapus hewan <br>";
        $animal->destroy(1)
        $animal->index();
        echo "<br>";
    ?>