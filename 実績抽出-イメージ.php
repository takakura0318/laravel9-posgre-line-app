<?php
public function exportOrderHistory() { 
    // 見込み買い区分の注文履歴を取得する 
    $expectedOrders=DB::table('order_history')->where('order_category', 'expected')->get();

    // 当用買い区分の注文履歴を取得する
    $actualOrders = DB::table('order_history')->where('order_category', 'actual')->get();
    // 合算した注文履歴を格納するコレクション
    $combinedOrders = collect([]);

    // $expectedOrdersの内容を$combinedOrdersに詰め替える
    foreach ($expectedOrders as $order) {
        $combinedOrders->push([
        'product_id' => $order->product_id,
        'product_name' => $order->product_name,
        'quantity' => $order->quantity,
        'total_price' => $order->total_price,
        ]);
    }

    foreach ($actualOrders as $actualOrder) {
        // $combinedOrdersの中から、商品コードが一致する注文履歴を探す
        $matchedOrder = $combinedOrders->firstWhere('product_id', $actualOrder->product_id);

        // 商品コードが一致する注文履歴が存在する場合、数量を合算する
        if ($matchedOrder) {
            // 参照が保持されている想定
            $matchedOrder['quantity'] += $actualOrder->quantity;
            $matchedOrder['total_price'] += $actualOrder->total_price;
        }
        // 商品コードが一致する注文履歴が存在しない場合、$combinedOrdersの最後の注文データに対して数量を合算する
        else {
            // 参照が保持されている想定
            $lastOrder = $combinedOrders->last();
            $lastOrder['quantity'] += $actualOrder->quantity;
            $lastOrder['total_price'] += $actualOrder->total_price;
        }
    }

    // Excelファイルに出力する
    $excel = new \PHPExcel();
    $sheet = $excel->getActiveSheet();

    // ヘッダー行を設定する
    $sheet->setCellValue('A1', '商品ID')
    ->setCellValue('B1', '商品名')
    ->setCellValue('C1', '数量')
    ->setCellValue('D1', '合計金額');

    // データを設定する
    $row = 2;
    foreach ($combinedOrders as $order) {
        $sheet->setCellValue('A' . $row, $order['product_id'])
        ->setCellValue('B' . $row, $order['product_name'])
        ->setCellValue('C' . $row, $order['quantity'])
        ->setCellValue('D' . $row, $order['total_price']);

        // 注文名取得後、セットする
        // 未収部署取得後、セットする
 

        // その他

        // その他

        // その他
        $row++;
    }

    // ファイルを保存する
    $writer = \PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $writer->save('order_history.xlsx');
    // ここで、$combinedOrders の内容を確認する
    dd($combinedOrders);
}