//
//  WinnerViewController.swift
//  swiftris
//
//  Created by garfield yang on 2/27/19.
//  Copyright © 2019 Suha Baobaid. All rights reserved.
//

import UIKit

final class WinnerViewController: UIViewController {
    override func viewWillAppear(_ animated: Bool) {
        super.viewWillAppear(animated)
        self.view.backgroundColor = UIColor(patternImage: UIImage(named: "backgroudnresult")!)
        
    }
    override func viewDidLoad() {
        super.viewDidLoad()
    }
    
}
