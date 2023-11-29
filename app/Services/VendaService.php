<?php
    namespace App\Services;
    use App\Models\User;
    use Log;

    class VendaService{

        public function finalizarVenda($produtos = [], User $user){
            try{

                \DB::beginTransaction();



                \DB::commit();
            }catch(\Exception $e){
                \DB::rollback();
                Log::error("ERRO: VENDA SERVICE", ['message'=> $e->getMessage()]);
                return [ 'status' => 'err', 'message' => 'Venda não pode ser finalizada'];
            }
        }

    }
