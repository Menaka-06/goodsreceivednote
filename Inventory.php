<?php

 class Inventory extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('inventory_model');
         $this->load->model('Goodsreceivednote_model');
    }
    public function stores(){
        $data['page_name']='Stores';
		$data['sub_page']='Inventory/Stores';
		$this->load->view('user_index',$data);
    }
    public function Addstores(){
        $data['page_name']='Add Stores';
		$data['sub_page']='Inventory/AddStores';
		$this->load->view('user_index',$data);
    }

    public function wareHouse(){
        $data['page_name']='Warehouse';
		$data['sub_page']='Inventory/Warehouse';
		$this->load->view('user_index',$data);
    }
    public function addwareHouse(){
        $data['page_name']='Add Ware House';
		$data['sub_page']='Inventory/AddwareHouse';
		$this->load->view('user_index',$data);
    }

    public function stock(){
        $data['page_name']='Stock';
		$data['sub_page']='Inventory/Stock';
		$this->load->view('user_index',$data);
    }
    public function addStock(){
        $data['page_name']='Add Stock';
		$data['sub_page']='Inventory/Addstock';
		$this->load->view('user_index',$data);
    }
   
    public function goodsRecievednote(){
        $data['page_name']='Goods Recieved Note';
		$data['sub_page']='Inventory/GoodsRecievednote';
        $config['base_url'] = base_url()."Inventory/goodsRecievednote"; 
        $config['total_rows'] = $this->common_model->getTotalRecords('tbl_goods_received_notes','');
        $config['per_page'] = PAGINATION_COUNT; 
        $config=$this->common_model->paginationStyle($config);
        $this->pagination->initialize($config); 
        $lmt=0;
        $lmt=$this->uri->segment(3);
        $data['lmt']=$lmt;
        $data['goods_receivednote'] = $this->Goodsreceivednote_model->getGoodreceivednote($config['per_page'],$lmt);
		$this->load->view('user_index',$data);
    }
    public function addgoodsRecievednote(){
        $data['page_name']='Add Goods Recieved Note';
		$data['sub_page']='Inventory/AddgoodsRecievednote';
		$this->load->view('user_index',$data);
    }
    public function packingList(){
        $data['page_name']='Packing List';
		$data['sub_page']='Inventory/Packinglist';
		$this->load->view('user_index',$data);
    }
    public function addPackinglist(){
        $data['page_name']='Add Packing List';
		$data['sub_page']='Inventory/Addpackinglist';
		$this->load->view('user_index',$data);
    }

    public function inventoryDeliverynote(){
        $data['page_name']='Inventory Delivery Note';
		$data['sub_page']='Inventory/InventoryDeliverynote';
		$this->load->view('user_index',$data);
    }
    public function addinventoryDeliverynote(){
        $data['page_name']='Add Inventory Delivery Note';
		$data['sub_page']='Inventory/AddinventoryDeliverynote';
		$this->load->view('user_index',$data);
    }

    public function salesReturnnote(){
        $data['page_name']='Sales Return Note';
		$data['sub_page']='Inventory/SalesReturnnote';
		$this->load->view('user_index',$data);
    }
    public function addsalesReturnnote(){
        $data['page_name']='Add Sales Return Note';
		$data['sub_page']='Inventory/AddsalesReturnnote';
		$this->load->view('user_index',$data);
    }
    public function purchaseReturnnote(){
        $data['page_name']='Purchase Return Note';
		$data['sub_page']='Inventory/Purchasereturnnote';
		$this->load->view('user_index',$data);
    }
    public function addpurchaseReturnnote(){
        $data['page_name']='Add Purchase Return Note';
		$data['sub_page']='Inventory/AddpurchaseReturnnote';
		$this->load->view('user_index',$data);
    }
    public function stockAdjustment(){
        $data['page_name']='Stock Adjustment';
		$data['sub_page']='Inventory/StockAdjustment';
		$this->load->view('user_index',$data);
    }
    public function addstockAdjustment(){
        $data['page_name']='Add Stock Adjustment';
		$data['sub_page']='Inventory/AddstockAdjustment';
		$this->load->view('user_index',$data);
    }
    public function stockTransfer(){
        $data['page_name']='Stock Transfer';
		$data['sub_page']='Inventory/Stocktransfer';
		$this->load->view('user_index',$data);
    }
    public function addstockTransfer(){
        $data['page_name']='Add Stock Transfer';
		$data['sub_page']='Inventory/Addstocktransfer';
		$this->load->view('user_index',$data);
    }
    public function wastage(){
        $data['page_name']='Wastage';
		$data['sub_page']='Inventory/Wastage';
		$this->load->view('user_index',$data);
    }
    public function addWastage(){
        $data['page_name']='Add Wastage';
		$data['sub_page']='Inventory/Addwastage';
		$this->load->view('user_index',$data);
    }
    public function stockLedger(){
        $data['page_name']='Stock Ledger';
		$data['sub_page']='Inventory/Stockledger';
		$this->load->view('user_index',$data);
    }
    public function addstockLedger(){
        $data['page_name']='Add Stock Ledger';
		$data['sub_page']='Inventory/AddstockLedger';
		$this->load->view('user_index',$data);
    }
    public function inventoryReports(){
        $data['page_name']='Inventory Reports';
		$data['sub_page']='Inventory/Inventoryreports';
		$this->load->view('user_index',$data);
    }
    public function inventorySettings(){
        $data['page_name']='Inventory Settings';
		$data['sub_page']='Inventory/Inventorysettings';
		$this->load->view('user_index',$data);
    }
    public function Openingstockreport(){
     $data['page_name']='Opening Stock report';
     $data['sub_page']='Inventory/Openingstockreport';
     $this->load->view('user_index',$data);
    }
    public function Goodsreceivednotereport(){
      $data['page_name']='Goods Received Note report';
      $data['sub_page']='Inventory/Goodsreceivednotereport';
      $this->load->view('user_index',$data);
     }
     public function Packinglistreport(){
      $data['page_name']='Packing List report';
      $data['sub_page']='Inventory/Packinglistreport';
      $this->load->view('user_index',$data);
     }
     public function Inventorydeliverynotereport(){
      $data['page_name']='Inventory Delivery Note report';
      $data['sub_page']='Inventory/Inventorydeliverynotereport';
      $this->load->view('user_index',$data);
     }
    
    public function Stocktransferreport(){
      $data['page_name']='Stock Transfer report';
      $data['sub_page']='Inventory/Stocktransferreport';
      $this->load->view('user_index',$data);
     }
     public function Stockadjustmentreport(){
      $data['page_name']='Stock Adjustment report';
      $data['sub_page']='Inventory/Stockadjustmentreport';
      $this->load->view('user_index',$data);
     }
     public function Wastageentriesreport(){
      $data['page_name']='Wastage entries report';
      $data['sub_page']='Inventory/Wastageentriesreport';
      $this->load->view('user_index',$data);
     }
     public function Salesreturnnotereport(){
      $data['page_name']='Sales return note report';
      $data['sub_page']='Inventory/Salesreturnnotereport';
      $this->load->view('user_index',$data);
     }
     public function Purchasereturnnotereport(){
      $data['page_name']='Purchase return note report';
      $data['sub_page']='Inventory/Purchasereturnnotereport';
      $this->load->view('user_index',$data);
     }
     public function Stockledgerreport(){
      $data['page_name']='Stock Ledger report';
      $data['sub_page']='Inventory/Stockledgerreport';
      $this->load->view('user_index',$data);
     }
     public function Stockvaluereport(){
      $data['page_name']='Stock Value report';
      $data['sub_page']='Inventory/Stockvaluereport';
      $this->load->view('user_index',$data);
     }
     public function Wastagereport(){
      $data['page_name']='Wastage Report';
      $data['sub_page']='Inventory/Wastagereport';
      $this->load->view('user_index',$data);
     }

     public function Storessettings(){
      $data['page_name']='Stores Settings';
      $data['sub_page']='Inventory/Storessettings';
      $this->load->view('user_index',$data);
     }
     public function Warehousesettings(){
      $data['page_name']='Warehouse Settings';
      $data['sub_page']='Inventory/Warehousesettings';
      $this->load->view('user_index',$data);
     }
     public function Products(){
      $data['page_name']='Products';
      $data['sub_page']='Inventory/Products';
      $this->load->view('user_index',$data);
     }
     public function Racks(){
      $data['page_name']='Racks';
      $data['sub_page']='Inventory/Racks';
      $this->load->view('user_index',$data);
     }
     public function Bin(){
      $data['page_name']='Bin';
      $data['sub_page']='Inventory/Bin';
      $this->load->view('user_index',$data);
     }
     public function Generalsettings(){
      $data['page_name']='General Settings';
      $data['sub_page']='Inventory/Generalsettings';
      $this->load->view('user_index',$data);
     }
     public function Permission(){
      $data['page_name']='Permission';
      $data['sub_page']='Inventory/Permission';
      $this->load->view('user_index',$data);
     }
    public function Stockdetails(){
        $data['page_name']='Stock details';
        $data['sub_page']='Inventory/Stockdetails';
        $config['base_url'] = base_url()."inventory/Stockdetails"; 
        $config['total_rows'] = $this->common_model->getTotalRecords('tbl_inventory','');
        // $config['per_page'] = PAGINATION_COUNT; 
        $config['per_page'] = 130; 
        $config=$this->common_model->paginationStyle($config);
        $this->pagination->initialize($config); 
        $lmt=0;
        $lmt=$this->uri->segment(3);
        $lmt=mysqli_real_escape_string($this->db->conn_id,$lmt);
        $data['inventory'] = $this->inventory_model->getInventoryList($config['per_page'],$lmt);
        $this->load->view('user_index',$data);
    }
    public function StockReport(){
      $data['page_name']='Stock Reports';
      $data['sub_page']='Inventory/stockReports';
      $this->load->view('user_index',$data);
    }
    public function generateStockReports(){
      if(isset($_POST['search_stock_report'])){
        $date=$this->security->xss_clean($this->input->post('date'));
        $customer=$this->common_model->getActiveCustomer();
        $products=$this->common_model->getAllActiveProducts();
        if(empty($customer)){
          $this->session->set_flashdata('Warning', 'No Data To Display');
          redirect(base_url().'inventory/StockReport');
        }
        if(!empty($customer)){
          foreach($customer as $cus){
            $perBV['Stockist Id']=trim($cus->CustomerCode);
            $perBV['Stockist Name']=trim($cus->CustomerName);
            foreach($products as $prd){
              $perBV[trim($prd->productName).'-'.trim($prd->productSkuCode)]=$this->inventory_model->getBranchProductBalanceBetDate($cus->id,$prd->id,$date);
            }
            $per_ata[]=$perBV;
          }
            
          $data=$per_ata;
          $filename=$date."-stock-details";
          $export=$this->common_model->ExcelExport($filename,$data);
        }
      }else{
        $this->session->set_flashdata('Warning', 'Invalid Request');
			  redirect(base_url().'inventory/StockReport');
      }
    }
 }